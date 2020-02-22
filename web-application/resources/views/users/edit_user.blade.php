@extends('layouts.master')

@section('content')

    <h3>Bearbeiten: User ({{$user[0]->firstName.' '.$user[0]->lastName}})</h3>
    <hr>
    <form method="POST" action="/manage/manage-users/save-edit/{{$user[0]->id}}">

        @csrf

        @foreach($user as $u)

            <div class="form-group col-md-12">
                <label for="firstName">Vorname:</label>
                <input type="text" class="form-control" id="firstName" name="firstName" value="{{$u->firstName}}">
            </div>

            <div class="form-group col-md-12">
                <label for="lastName">Nachname:</label>
                <input type="text" class="form-control" id="lastName" name="lastName" value="{{$u->lastName}}">
            </div>

            <div class="form-group col-md-12">
                <label for="accountName">Account Name:</label>
                <input type="text" class="form-control" id="accountName" name="accountName" value="{{$u->accountName}}">
            </div>

            <div class="form-group col-md-12">
                <label for="email">E-Mail Adresse:</label>
                <input type="text" class="form-control" id="email" name="email" value="{{$u->email}}">
            </div>

            <div class="form-check col-md-12">
                <label class="form-check-label" for="defaultCheck1">
                    Berechtigungen ändern.
                </label><br>
                <input type="checkbox" id="yourBox" name="yourBox"/>
            </div>

            <div class="form-group col-md-12">
                <label for="permissions">Berechtigungen:</label><br>
                <select class="permissionMultiselect" name="permissionOption[]" style="width:100%" id="yourText" disabled>
                    <option disabled selected value></option>
                    @foreach($permissions as $permission)
                        <option value="{{$permission->accessLevel}}">{{$permission->name}}</option>
                    @endforeach
                </select>
            </div>

        <div class="form-row">
        <input class="btn btn-primary col-md-12" type="submit" value="Änderungen vornehmen.">
        </div>

        @endforeach

    </form>

@endsection

@section('scripts')

    <script>
        $(document).ready(function() {
            $('.permissionMultiselect').select2();
        });
    </script>

    <script>
        document.getElementById('yourBox').onchange = function() {
            document.getElementById('yourText').disabled = !this.checked;
        };
    </script>

@endsection


