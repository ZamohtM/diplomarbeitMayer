@extends('layouts.master')

@section('content')

    <h3>Bearbeiten: Filiale ({{$location[0]->location}})</h3>
    <hr>
    <form method="POST" action="/manage/manage-locations/save-edit/{{$location[0]->id}}" enctype="multipart/form-data">

        @csrf

        <div class="form-group col-md-12">
            <label for="location">Filialen Name:</label>
            <input type="text" class="form-control" id="location" name="location" value="{{$location[0]->location}}">
        </div>

        <div class="form-group col-md-12">
            <label for="address">Adresse:</label>
            <input type="text" class="form-control" id="address" name="address" value="{{$location[0]->street}}">
        </div>

        <div class="form-group col-md-12">
            <label for="postCode">Postleitzahl:</label>
            <input type="text" class="form-control" id="postCode" name="postCode" value="{{$location[0]->postCode}}">
        </div>

        <div class="form-group col-md-12">
            <label for="city">Ort:</label>
            <input type="text" class="form-control" id="city" name="city" value="{{$location[0]->city}}">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="manager"><input type="checkbox" id="boxManager" name="boxManager"/> Filialleiter:</label><br>
                <select class="managerMultiselect" name="managerOption[]" multiple="multiple" style="width:100%" id="textManager" disabled>
                    @foreach($mitarbeiter as $arbeiter)
                        <option>{{$arbeiter->firstName.' '.$arbeiter->lastName}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-6">
                <label for="employees"><input type="checkbox" id="boxEmployees" name="boxEmployees"/> Mitarbeiter:</label><br>
                <select class="employeesMultiselect" name="employeesOption[]" multiple="multiple" style="width:100%" id="textEmployees" disabled>
                    @foreach($mitarbeiter as $arbeiter)
                        <option>{{$arbeiter->firstName.' '.$arbeiter->lastName}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">E-Mail Adresse:</label>
                <input type="text" class="form-control" id="email" name="email" value="{{$location[0]->email}}">
            </div>

            <div class="form-group col-md-6">
                <label for="phoneNumber">Telefonnummer:</label>
                <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" value="{{$location[0]->telnummer}}">
            </div>
        </div>

        <div class="form-group col-md-12">
            <label for="departments"><input type="checkbox" id="boxDepartments" name="boxDepartments"/> Abteilungen:</label><br>
            <select class="departmentsMultiselect" name="departmentsOption[]" multiple="multiple" style="width:100%" id="textDepartments" disabled>
                @foreach($abteilungen as $abteilung)
                    <option>{{$abteilung->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-md-12">
            <label for="openTimes">Öffnungszeiten: (Wochentags)</label>
            <input type="text" class="form-control" id="openTimes" name="openTimes" value="{{$location[0]->öffnungszeiten}}">
        </div>

        <div class="form-group col-md-12">
            <label for="openTimesWeekends">Öffnungszeiten: (Wochenende und Feiertage)</label>
            <input type="text" class="form-control" id="openTimesWeekends" name="openTimesWeekends" value="{{$location[0]->öffnungszeitenWochenende}}">
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
            $('.managerMultiselect').select2();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.countryMultiselect').select2();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.stateMultiselect').select2();
        });
    </script>

    <script>
        document.getElementById('boxDepartments').onchange = function() {
            document.getElementById('textDepartments').disabled = !this.checked;
        };
    </script>

    <script>
        document.getElementById('boxManager').onchange = function() {
            document.getElementById('textManager').disabled = !this.checked;
        };
    </script>

    <script>
        document.getElementById('boxEmployees').onchange = function() {
            document.getElementById('textEmployees').disabled = !this.checked;
        };
    </script>


@endsection


