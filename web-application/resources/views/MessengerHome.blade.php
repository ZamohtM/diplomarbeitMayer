@extends('layouts.app')



@section('navbar-right')
    <div class="btn-group">
        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{Auth::user()->firstName.' '.Auth::user()->lastName}}
        </button>
        <div class="dropdown-menu dropdown-menu-right">
            <a href="/"><button class="dropdown-item" type="button" >Zurück zum Dashboard</button></a>
            <a href="/manage/manage-mitarbeiter/{{Auth::user()->worker}}"><button class="dropdown-item" type="button" >Profil</button></a>
            <a href="{{route('logout')}}"><button class="dropdown-item" type="button" >Logout</button></a>
        </div>
    </div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">

                <div class="card-header">Messenger</div>
                <div class="card-body" id="app">
                <chat-app :user="{{auth()->user()}}"></chat-app>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
