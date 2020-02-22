<template>
    <div class="chat-app">
        <Conversation :contact="selectedContact" :messages="messages" @new="saveNewMessage"/>
        <ContactsList :contacts="contacts" @selected="startConversationWith"/>
    </div>
</template>

<script>

    import Conversation from "./Conversation";
    import ContactsList from "./ContactsList";

    export default {
        props: {
            user: {
                type: Object,
                required: true
            }
        },
        data() {
            return {
                selectedContact: null,
                messages: [],
                contacts: [],
            };
        },
        created() {
        },
        mounted() {
            Echo.private(`messages${this.user.id}`)
                .listen('NewMessage', (e) => {
                    this.handleIncoming(e.Message);
                });

            axios.get('/contacts')
                .then((response) => {
                    this.contacts = response.data;
                });
        },
        methods: {
            startConversationWith(contact){
              axios.get(`/conversations/${contact.id}`)
                  .then((response) => {
                      this.messages = response.data;
                      this.selectedContact = contact;
                  })
          },
          saveNewMessage(text){
                this.messages.push(text);
          },
            hanleIncoming(message) {
                if (this.selectedContact && message.from == this.selectedContact.id) {
                    this.saveNewMessage(message);
                    return;
                }

                alert(message.text);
            }
        },
        components: {ContactsList, Conversation}
    }
</script>

<style lang="scss" scoped>
    .chat-app {
        display: flex;

    }
</style>
