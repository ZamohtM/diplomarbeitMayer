@extends('layouts.master')

@section('content')

    <h3>{{$product[0]->name}}</h3>
    <hr>

    <table class="table table-borderless">
        <tr>
            <td class="col-md-6" align="left"><img class="img-thumbnail" src="{{ asset('upload/products/'.$product[0]->name.'/picture.jpg') }}" width="40%" height="auto"></td>
            <td class="col-md-6">&nbsp;</td>
        </tr>
        <tr>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>
        <tr>
            <th>Grundinformationen:</th>
            <th></th>
        </tr>
        <tr>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>
        <tr>
            <td><label for="name">Name:</label>
                <div>{{$product[0]->name}}</div></td>
            <td></td>
        </tr>
        <tr>
            <td><label for="producer">Hersteller:</label>
                <div>{{$product[0]->hersteller}}</div></td>
            <td></td>
        </tr>
        <tr>
            <td><label for="wrapping">Verpackung:</label>
                <div>{{$product[0]->verpackung}}</div></td>
            <td></td>
        </tr>
        <tr>
            <td><label for="ingridients">Inhaltsstoffe:</label>
                <div>{{$product[0]->inhaltsstoffe}}</div></td>
            <td></td>
        </tr>
    </table>

@endsection

@section('scripts')

@endsection


