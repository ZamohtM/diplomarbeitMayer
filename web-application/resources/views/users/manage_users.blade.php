@extends('layouts.master')

@section('content')

    <h3>Verwaltung: User</h3>
    <hr>

    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Account Name</th>
            <th scope="col">E-Mail Adresse</th>
            <th scope="col">Berechtigungen</th>
            <th scope="col">Passwort zurücksetzten</th>
            <th scope="col">Bearbeiten</th>
            <th scope="col">Löschen</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
           <tr>
               <td class="align-middle">{{$user->firstName.' '.$user->lastName}}</td>
               <td class="align-middle">{{$user->accountName}}</td>
               <td class="align-middle">{{$user->email}}</td>
               <td class="align-middle">{{$user->permissions}}</td>
               <td align="center" onclick="location.href='manage-users/reset-password/{{$user->id}}'"><button><i class="fa fa-unlock"></i></button></td>
               <td align="center" onclick="location.href='manage-users/edit/{{$user->id}}'"><button><i class="fa fa-edit"></i></button></td>
               <td align="center" onclick="location.href='manage-users/delete/{{$user->id}}'"><button><i class="fa fa-trash"></i></button></td>
           </tr>
        @endforeach
        </tbody>
    </table>

@endsection

@section('scripts')

@endsection


