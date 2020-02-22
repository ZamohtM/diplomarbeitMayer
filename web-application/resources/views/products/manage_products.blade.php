@extends('layouts.master')

@section('content')

    <h3>Verwaltung: Produkte</h3>
    <hr>

    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Hersteller</th>
            <th scope="col">Produktart</th>
            <th scope="col">Bearbeiten</th>
            <th scope="col">Löschen</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
           <tr>
               <td class="align-middle"  onclick="location.href='manage-produkte/{{$product->id}}'">{{$product->name}}</td>
               <td class="align-middle"  onclick="location.href='manage-produkte/{{$product->id}}'">{{$product->hersteller}}</td>
               <td class="align-middle"  onclick="location.href='manage-produkte/{{$product->id}}'">{{$product->produktart}}</td>
               <td align="center" onclick="location.href='manage-produkte/edit/{{$product->id}}'"><button><i class="fa fa-edit"></i></button></td>
               <td align="center" onclick="location.href='manage-produkte/delete/{{$product->id}}'"><button><i class="fa fa-trash"></i></button></td>
           </tr>
        @endforeach
        </tbody>
    </table>

@endsection

@section('scripts')

@endsection


