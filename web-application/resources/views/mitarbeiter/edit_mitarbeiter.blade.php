@extends('layouts.master')

@section('content')

    <h3>Bearbeiten: Mitarbeiter</h3>
    <hr>
    <form method="POST" action="/manage/manage-mitarbeiter/save-edit/{{$mitarbeiter[0]->id}}">

        @csrf

        @foreach($mitarbeiter as $arbeiter)

        <div class="form-group col-md-12">
            <label for="gender">Geschlecht:</label>
            <select class="form-control" id="gender" name="genderOption">
                @if($arbeiter->gender == 'Mann')
                    <option value="Mann" selected>Mann</option>
                    <option value="Frau">Frau</option>
                    <option value="Sonstiges">Sonstiges</option>
                @endif
                @if($arbeiter->gender == 'Frau')
                    <option value="Mann">Mann</option>
                    <option value="Frau" selected>Frau</option>
                    <option value="Sonstiges">Sonstiges</option>
                @endif
                @if($arbeiter->gender == 'Sonstiges')
                    <option value="Mann">Mann</option>
                    <option value="Frau">Frau</option>
                    <option value="Sonstiges" selected>Sonstiges</option>
                @endif
            </select>
        </div>

        <div class="form-group col-md-12">
            <label for="title">Titel:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$arbeiter->title}}">
        </div>

        <div class="form-group col-md-12">
            <label for="firstName">Vorname:</label>
            <input type="text" class="form-control" id="firstName" name="firstName" value="{{$arbeiter->firstName}}">
        </div>

        <div class="form-group col-md-12">
            <label for="lastName">Nachname:</label>
            <input type="text" class="form-control" id="lastName" name="lastName" value="{{$arbeiter->lastName}}">
        </div>

        <div class="form-group col-md-12">
            <label for="dateOfBirth">Geburtsdatum:</label>
        <div class="input-group date" data-provide="datepicker">
            <input type="text" class="form-control" id="dateOfBirth" name="dateOfBirth" value="{{$arbeiter->dateOfBirth}}">
            <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
            </div>
        </div>
        </div>

        <div class="form-group col-md-12">
            <label for="country">Land:</label><br>
            <select class="countryMultiselect" name="countryOption[]" style="width:100%">
                <option disabled selected value></option>
                @foreach($countrys as $country)
                    <option>{{$country->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-md-12">
            <label for="state">Bundesland:</label><br>
            <select class="stateMultiselect" name="stateOption[]" style="width:100%">
                <option disabled selected value></option>
                @foreach($states as $state)
                    <option>{{$state->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-md-12">
            <label for="postCode">Postleitzahl:</label>
            <input type="text" class="form-control" id="postCode" name="postCode" value="{{$arbeiter->postCode}}">
        </div>

        <div class="form-group col-md-12">
            <label for="city">Ort:</label>
            <input type="text" class="form-control" id="city" name="city" value="{{$arbeiter->city}}">
        </div>

        <div class="form-group col-md-12">
            <label for="address">Adresse:</label>
            <input type="text" class="form-control" id="address" name="address" value="{{$arbeiter->address}}">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="privateEmail">Mitarbeiter Art:</label>
                <select class="employeeTypeMultiselect" name="employeeTypeOption[]" style="width:100%">
                    <option disabled selected value></option>
                    @foreach($employeeTypes as $employeeType)
                        <option>{{$employeeType->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-6">
                <label for="internalEmail">Abteilung:</label>
                <select class="departmentMultiselect" name="departmentOption[]" style="width:100%">
                    <option disabled selected value></option>
                    @foreach($departments as $department)
                        <option>{{$department->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-row">
        <div class="form-group col-md-6">
            <label for="privateEmail">Private E-Mail Adresse:</label>
            <input type="text" class="form-control" id="privateEmail" name="privateEmail" value="{{$arbeiter->privateEmail}}">
        </div>

        <div class="form-group col-md-6">
            <label for="internalEmail">Interne E-Mail Adresse:</label>
            <input type="text" class="form-control" id="internalEmail" name="internalEmail" value="{{$arbeiter->internalEmail}}">
        </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="privatePhoneNumber">Private Telefonnummer:</label>
            <input type="text" class="form-control" id="privatePhoneNumber" name="privatePhoneNumber" value="{{$arbeiter->privatePhoneNumber}}">
        </div>

        <div class="form-group col-md-6">
            <label for="internalPhoneNumber">Interne Telefonnummer:</label>
            <input type="text" class="form-control" id="internalPhoneNumber" name="internalPhoneNumber" value="{{$arbeiter->internalPhoneNumber}}">
        </div>
        </div>
        <br>
        <div class="form-row">
        <input class="btn btn-primary col-md-12" type="submit" value="Änderungen vornehmen.">
        </div>

        @endforeach

    </form>

@endsection

@section('scripts')

    <script>
        $(document).ready(function() {
            $('.employeeTypeMultiselect').select2();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.departmentMultiselect').select2();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.stateMultiselect').select2();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.countryMultiselect').select2();
        });
    </script>

@endsection


