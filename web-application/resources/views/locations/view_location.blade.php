@extends('layouts.master')

@section('content')

    <h3>{{$location[0]->location}}</h3>
    <hr>

    <table class="table table-borderless">
        <tr>
            <td class="col-md-6" align="left"><img class="img-thumbnail" src="{{ asset('upload/locations/'.$location[0]->location.'/picture.jpg') }}" width="40%" height="auto"></td>
            <td class="col-md-6">&nbsp;</td>
        </tr>
        <tr>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>
        <tr>
            <th>Grundinformationen:</th>
            <th>Adresse:</th>
        </tr>
        <tr>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>
        <tr>
            <td><label for="location">Filialenname:</label>
                <div>{{$location[0]->location}}</div></td>
            <td>    <label for="address">Straße:</label>
                <div>{{$location[0]->street}}</div></td>
        </tr>
        <tr>
            <td><label for="departments">Abteilungen:</label>
                <div>{{$location[0]->abteilungen}}</div></td>
            <td><label for="postCodeAndCity">Postleitzahl und Ort:</label>
                <div>{{$location[0]->postCode.' '.$location[0]->city}}</div></td>
        </tr>
        <tr>
            <td><label for="openTimes">Öffnungszeiten:</label>
                <div>{{$location[0]->öffnungszeiten}}</div> <br>
                <div>{{$location[0]->öffnungszeitenWochenende}}</div></td>
            <td><label for="country">Land:</label>
                <div>{{$location[0]->country}}</div></td>
        </tr>
        <tr>
            <td><label for="email">E-Mail Adresse:</label>
                <div>{{$location[0]->email}}</div></td>
            <td><label for="state">Bundesland:</label>
                <div>{{$location[0]->state}}</div></td>
        </tr>
        <tr>
            <td><label for="telnummer">Telefonnummer:</label>
                <div>{{$location[0]->telnummer}}</div></td>
            <td></td>
        </tr>
        <tr>
            <td><label for="manager">Manager:</label>
                <div>{{$location[0]->manager}}</div></td>
            <td></td>
        </tr>
        <tr>
            <td><label for="employees">Mitarbeiter:</label>
                <div>{{$location[0]->employees}}</div></td>
            <td></td>
        </tr>
        <tr>
            <td><label for="openDate">Eröffnungsdatum:</label>
                <div>{{$location[0]->created_at}}</div></td>
            <td></td>
        </tr>
    </table>

@endsection

@section('scripts')

@endsection


