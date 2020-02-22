@extends('layouts.master')

@section('content')

    <h3>Anlegen: Neuer User</h3>
    <hr>

    <form method="POST" action="/manage/save-user">

        @csrf

        <div class="form-group col-md-12">
            <label for="worker">Mitarbeiter:</label><br>
            <select class="workerMultiselect" name="workerOption[]" style="width:100%">
                <option disabled selected value></option>
                @foreach($workers as $worker)
                    <option value="{{$worker->id}}">{{$worker->firstName.' '.$worker->lastName}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-md-12">
            <label for="accountName">Account Name:</label>
            <input type="text" class="form-control" id="accountName" name="accountName">
        </div>

        <div class="form-check col-md-12">
            <label class="form-check-label" for="defaultCheck1">
                Interne E-Mail Adresse verwenden.
            </label><br>
            <input type="checkbox" id="yourBox" name="yourBox"/>
        </div>

        <div class="form-group col-md-12">
            <label for="email">Neue E-Mail Adresse: (Nur wenn noch keine Interne E-Mail Adresse vorhanden ist!)</label>
            <input type="text" id="yourText" class="form-control" name="yourText"/>
        </div>

        <div class="form-group col-md-12">
            <label for="password">Vorläufiges Passwort:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group col-md-12">
            <label for="confirm_password">Vorläufiges Passwort bestätigen:</label>
            <input type="password" class="form-control" id="confirm_password" name="confirm_password">
        </div>

        <div class="form-group col-md-12">
            <label for="permissions">Berechtigungen:</label><br>
            <select class="permissionMultiselect" name="permissionOption[]" style="width:100%">
                <option disabled selected value></option>
                @foreach($permissions as $permission)
                    <option value="{{$permission->accessLevel}}">{{$permission->name}}</option>
                @endforeach
            </select>
        </div>

        <input class="btn btn-primary" type="submit" value="Absenden">

    </form>

@endsection

@section('scripts')

    <script>
        $(document).ready(function() {
            $('.workerMultiselect').select2();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.permissionMultiselect').select2();
        });
    </script>


    <script>
        document.getElementById('yourBox').onchange = function() {
            document.getElementById('yourText').disabled = this.checked;
        };
    </script>

    <script>
        var password = document.getElementById("password")
            , confirm_password = document.getElementById("confirm_password");

        function validatePassword(){
            if(password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>

@endsection

