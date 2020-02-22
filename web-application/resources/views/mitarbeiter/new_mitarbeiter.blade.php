@extends('layouts.master')

@section('content')

    <h3>Anlegen: Neuer Mitarbeiter</h3>
    <hr>
    <form method="POST" action="/manage/save-mitarbeiter" enctype="multipart/form-data">

        @csrf

        <div class="form-group col-md-12">
            <label for="gender">Geschlecht:</label>
            <select class="form-control" id="gender" name="genderOption">
                <option disabled selected value></option>
                <option value="Mann">Mann</option>
                <option value="Frau">Frau</option>
                <option value="Sonstiges">Sonstiges</option>
            </select>
        </div>

        <div class="form-group col-md-12">
            <label for="title">Titel:</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="form-group col-md-12">
            <label for="firstName">Vorname:</label>
            <input type="text" class="form-control" id="firstName" name="firstName">
        </div>

        <div class="form-group col-md-12">
            <label for="lastName">Nachname:</label>
            <input type="text" class="form-control" id="lastName" name="lastName">
        </div>

        <div class="form-group col-md-12">
            <label for="dateOfBirth">Geburtsdatum:</label>
        <div class="input-group date" data-provide="datepicker">
            <input type="text" class="form-control" id="dateOfBirth" name="dateOfBirth">
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
                    <option value="{{$country->id}}">{{$country->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-md-12">
            <label for="state">Bundesland:</label><br>
            <select class="stateMultiselect" name="stateOption[]" style="width:100%">
                <option disabled selected value></option>
                @foreach($states as $state)
                    <option value="{{$state->id}}">{{$state->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-md-12">
            <label for="postCode">Postleitzahl:</label>
            <input type="text" class="form-control" id="postCode" name="postCode">
        </div>

        <div class="form-group col-md-12">
            <label for="city">Ort:</label>
            <input type="text" class="form-control" id="city" name="city">
        </div>

        <div class="form-group col-md-12">
            <label for="address">Adresse:</label>
            <input type="text" class="form-control" id="address" name="address">
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
            <input type="text" class="form-control" id="privateEmail" name="privateEmail">
        </div>

        <div class="form-group col-md-6">
            <label for="internalEmail">Interne E-Mail Adresse:</label>
            <input type="text" class="form-control" id="internalEmail" name="internalEmail">
        </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="privatePhoneNumber">Private Telefonnummer:</label>
            <input type="text" class="form-control" id="privatePhoneNumber" name="privatePhoneNumber">
        </div>

        <div class="form-group col-md-6">
            <label for="internalPhoneNumber">Interne Telefonnummer:</label>
            <input type="text" class="form-control" id="internalPhoneNumber" name="internalPhoneNumber">
        </div>
        </div>

        <div class="form-row">
        <div class="form-group col-md-2">
            <label for="passportPicture">Passbild:</label>
            <input type="file" class="form-control-file" id="passportPicture" name="passportPicture">
        </div>

            <div class="form-group col-md-2">
            <label for="letterOfApplication">Bewerbungsschreiben:</label>
            <input type="file" class="form-control-file" id="letterOfApplication" name="letterOfApplication">
        </div>

            <div class="form-group col-md-2">
            <label for="curriculumVitae">Lebenslauf:</label>
            <input type="file" class="form-control-file" id="curriculumVitae" name="curriculumVitae">
        </div>

            <div class="form-group col-md-2">
            <label for="contract">Arbeitsvertrag:</label>
            <input type="file" class="form-control-file" id="contract" name="contract">
        </div>

            <div class="form-group col-md-2">
            <label for="conditions">Geschäftsrichtlinien:</label>
            <input type="file" class="form-control-file" id="conditions" name="conditions">
        </div>
        </div>
        <br>
        <div class="form-row">
        <input class="btn btn-primary col-md-12" type="submit" value="Erstellen eines neuen Mitarbeiters.">
        </div>
    </form>

@endsection

@section('scripts')

    <script>
        $(document).ready(function(){
            $('select[name="countryOption[]"]').on('change', function () {
                var country_id = $(this).val();

                if(country_id){
                    $.ajax({
                        url: '/getStates/'+country_id,
                        type: 'GET',
                        dataType: 'json',
                        success: function (data) {
                            console.log(data)
                            $('select[name="stateOption[]"]').empty();
                            $.each(data, function (key, value) {
                                $('select[name="stateOption[]"]').append('<option value="'+key+'">'+ value + '</option>');
                            });
                        }
                    });
                }
            });
        })
    </script>

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


