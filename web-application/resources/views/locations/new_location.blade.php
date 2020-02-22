@extends('layouts.master')

@section('content')

    <h3>Anlegen: Neue Filiale</h3>
    <hr>

    <form method="POST" action="/manage/save-location" enctype="multipart/form-data">

        @csrf

        <div class="form-group col-md-12">
            <label for="location">Filialen Name:</label>
            <input type="text" class="form-control" id="location" name="location">
        </div>

        <div class="form-group col-md-12">
            <label for="address">Adresse:</label>
            <input type="text" class="form-control" id="address" name="address">
        </div>

        <div class="form-group col-md-12">
            <label for="postCode">Postleitzahl:</label>
            <input type="text" class="form-control" id="postCode" name="postCode">
        </div>

        <div class="form-group col-md-12">
            <label for="city">Ort:</label>
            <input type="text" class="form-control" id="city" name="city">
        </div>

        <div class="form-row">
        <div class="form-group col-md-6">
            <label for="country">Land:</label><br>
            <select class="countryMultiselect" name="countryOption[]" style="width:100%">
                <option disabled selected value></option>
                @foreach($countrys as $country)
                    <option>{{$country->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-md-6">
            <label for="state">Bundesland:</label><br>
            <select class="stateMultiselect" name="stateOption[]" style="width:100%">
                <option disabled selected value></option>
                @foreach($states as $state)
                    <option>{{$state->name}}</option>
                @endforeach
            </select>
        </div>
        </div>

        <div class="form-row">
        <div class="form-group col-md-6">
            <label for="manager">Filialleiter:</label><br>
            <select class="managerMultiselect" name="managerOption[]" multiple="multiple" style="width:100%">
                @foreach($workers as $worker)
                    <option>{{$worker->firstName.' '.$worker->lastName}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-md-6">
            <label for="employees">Mitarbeiter:</label><br>
            <select class="employeesMultiselect" name="employeesOption[]" multiple="multiple" style="width:100%">
                @foreach($workers as $worker)
                    <option>{{$worker->firstName.' '.$worker->lastName}}</option>
                @endforeach
            </select>
        </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">E-Mail Adresse:</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>

            <div class="form-group col-md-6">
                <label for="phoneNumber">Telefonnummer:</label>
                <input type="text" class="form-control" id="phoneNumber" name="phoneNumber">
            </div>
        </div>

        <div class="form-group col-md-12">
            <label for="departments">Abteilungen:</label><br>
            <select class="departmentsMultiselect" name="departmentsOption[]" multiple="multiple" style="width:100%">
                @foreach($departments as $department)
                    <option>{{$department->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-md-12">
            <label for="openTimes">Öffnungszeiten: (Wochentags)</label>
            <input type="text" class="form-control" id="openTimes" name="openTimes">
        </div>

        <div class="form-group col-md-12">
            <label for="openTimesWeekends">Öffnungszeiten: (Wochenende und Feiertage)</label>
            <input type="text" class="form-control" id="openTimesWeekends" name="openTimesWeekends">
        </div>

        <div class="form-group col-md-6">
            <label for="locationPicture">Filialbild:</label>
            <input type="file" class="form-control-file" id="locationPicture" name="locationPicture">
        </div>

        <br>
        <div class="form-row">
            <input class="btn btn-primary col-md-12" type="submit" value="Erstellen einer neuen Filiale.">
        </div>

    </form>

@endsection

@section('scripts')

    <script>
        $(document).ready(function() {
            $('.managerMultiselect').select2();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.departmentsMultiselect').select2();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.employeesMultiselect').select2();
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

