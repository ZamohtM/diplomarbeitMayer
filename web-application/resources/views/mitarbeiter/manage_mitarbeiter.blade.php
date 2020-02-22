@extends('layouts.master')

@section('content')

    <h3>Verwaltung: Mitarbeiter</h3>
    <hr>

    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Abteilung</th>
            <th scope="col">Mitarbeiter Art</th>
            <th scope="col">Email</th>
            <th scope="col">Telefonnummer</th>
            <th scope="col">Bearbeiten</th>
            <th scope="col">Löschen</th>
        </tr>
        </thead>
        <tbody>
        @foreach($mitarbeiter as $mitarbeiter)
           <tr>
               <td class="align-middle"  onclick="location.href='manage-mitarbeiter/{{$mitarbeiter->id}}'">{{$mitarbeiter->firstName.' '.$mitarbeiter->lastName}}</td>
               <td class="align-middle"  onclick="location.href='manage-mitarbeiter/{{$mitarbeiter->id}}'">{{$mitarbeiter->department}}</td>
               <td class="align-middle"  onclick="location.href='manage-mitarbeiter/{{$mitarbeiter->id}}'">{{$mitarbeiter->employeeType}}</td>
               <td class="align-middle"  onclick="location.href='manage-mitarbeiter/{{$mitarbeiter->id}}'">{{$mitarbeiter->privateEmail}}<br>{{$mitarbeiter->internalEmail}}</td>
               <td class="align-middle"  onclick="location.href='manage-mitarbeiter/{{$mitarbeiter->id}}'">{{$mitarbeiter->privatePhoneNumber}}<br>{{$mitarbeiter->internalPhoneNumber}}</td>
               <td align="center" onclick="location.href='manage-mitarbeiter/edit/{{$mitarbeiter->id}}'"><button><i class="fa fa-edit"></i></button></td>
               <td align="center" onclick="location.href='manage-mitarbeiter/delete/{{$mitarbeiter->id}}'"><button><i class="fa fa-trash"></i></button></td>
           </tr>
        @endforeach
        </tbody>
    </table>

@endsection

@section('scripts')

@endsection


