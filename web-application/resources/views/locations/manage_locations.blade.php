@extends('layouts.master')

@section('content')

    <h3>Verwaltung: Filialen</h3>
    <hr>

    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Adresse</th>
            <th scope="col">Land/Bundesland</th>
            <th scope="col">Manager</th>
            <th scope="col">Telefonnummer</th>
            <th scope="col">Bearbeiten</th>
            <th scope="col">Löschen</th>
        </tr>
        </thead>
        <tbody>
        @foreach($locations as $location)
           <tr>
               <td class="align-middle"  onclick="location.href='manage-locations/{{$location->id}}'">{{$location->location}}</td>
               <td class="align-middle"  onclick="location.href='manage-locations/{{$location->id}}'">{{$location->street}}<br>{{$location->postCode.' '.$location->city}}</td>
               <td class="align-middle"  onclick="location.href='manage-locations/{{$location->id}}'">{{$location->country}}<br>{{$location->state}}</td>
               <td class="align-middle"  onclick="location.href='manage-locations/{{$location->id}}'">{{$location->manager}}</td>
               <td class="align-middle"  onclick="location.href='manage-locations/{{$location->id}}'">{{$location->telnummer}}</td>
               <td align="center" onclick="location.href='manage-locations/edit/{{$location->id}}'"><button><i class="fa fa-edit"></i></button></td>
               <td align="center" onclick="location.href='manage-locations/delete/{{$location->id}}'"><button><i class="fa fa-trash"></i></button></td>
           </tr>
        @endforeach
        </tbody>
    </table>

@endsection

@section('scripts')

@endsection


