@extends('layouts.master')

@section('content')

    <h3>{{$arbeiter[0]->firstName.' '.$arbeiter[0]->lastName}}</h3>
    <hr>

    <table class="table table-borderless">
        <tr>
            <td class="col-md-4" align="left"><img class="img-thumbnail" src="{{ asset('upload/workers/'.$arbeiter[0]->firstName.'-'.$arbeiter[0]->lastName.'/picture.jpg') }}" width="40%" height="auto"></td>
            <td class="col-md-4">&nbsp;</td>
            <td class="col-md-4">&nbsp;</td>
        </tr>
        <tr>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>
        <tr>
            <th>Grundinformationen:</th>
            <th>Wohnort:</th>
            <th>E-Mail Adresse und Telefonnummer:</th>
        </tr>
        <tr>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>
        <tr>
            <td><label for="gender">Geschlecht:</label>
                <div>{{$arbeiter[0]->gender}}</div></td>
            <td><label for="address">Adresse:</label>
                <div>{{$arbeiter[0]->address}}</div></td>
            <td><label for="privateEmail">Private E-Mail Adresse:</label>
                <div>{{$arbeiter[0]->privateEmail}}</div></td>
        </tr>
        <tr>
            <td><label for="title">Title:</label>
                <div>{{$arbeiter[0]->title}}</div></td>
            <td><label for="postCode">Postleitzahl und Ort:</label>
                <div>{{$arbeiter[0]->postCode.' '.$arbeiter[0]->city}}</div></td>
            <td><label for="internalEmail">Interne E-Mail Adresse:</label>
                <div>{{$arbeiter[0]->internalEmail}}</div></td>
        </tr>
        <tr>
            <td><label for="name">Name:</label>
                <div>{{$arbeiter[0]->firstName.' '.$arbeiter[0]->lastName}}</div></td>
            <td><label for="country">Land:</label>
                <div>{{$arbeiter[0]->country}}</div></td>
            <td><label for="privatePhoneNumber">Private Telefonnummer:</label>
                <div>{{$arbeiter[0]->privatePhoneNumber}}</div></td>
        </tr>
        <tr>
            <td><label for="dateOfBirth">Geburtsdatum:</label>
                <div>{{$arbeiter[0]->dateOfBirth}}</div></td>
            <td><label for="state">Bundesland:</label>
                <div>{{$arbeiter[0]->state}}</div></td>
            <td><label for="internalPhoneNumber">Interne E-Mail Adresse:</label>
                <div>{{$arbeiter[0]->internalPhoneNumber}}</div></td>
        </tr>
        <tr>
            <td><label for="department">Abteilung:</label>
                <div>{{$arbeiter[0]->department}}</div></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td><label for="employeeType">Mitarbeiter Art:</label>
                <div>{{$arbeiter[0]->employeeType}}</div></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td><label for="created_at">Mitarbeiter seit:</label>
                <div>{{$arbeiter[0]->created_at}}</div></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table>

@endsection

@section('scripts')

@endsection


