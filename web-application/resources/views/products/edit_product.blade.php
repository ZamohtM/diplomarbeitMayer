@extends('layouts.master')

@section('content')

    <h3>Bearbeiten: Produkt</h3>
    <hr>
    <form method="POST" action="/manage/manage-produkte/save-edit/{{$product[0]->id}}" enctype="multipart/form-data">

        @csrf

        <div class="form-group col-md-12">
            <label for="name">Produktname:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$product[0]->name}}">
        </div>

        <div class="form-group col-md-12">
            <label for="producer">Hersteller:</label>
            <input type="text" class="form-control" id="producer" name="producer" value="{{$product[0]->hersteller}}">
        </div>

        <div class="form-group col-md-12">
            <label for="productType"><input type="checkbox" id="boxProductType" name="boxProductType"/> Produktart:</label><br>
            <select class="productTypeMultiselect" name="productTypeOption[]" style="width:100%" id="textProductType" disabled>
                @foreach($productTypes as $productType)
                    <option>{{$productType->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-md-12">
            <label for="wrapping">Verpackung:</label>
            <input type="text" class="form-control" id="wrapping" name="wrapping" value="{{$product[0]->verpackung}}">
        </div>

        <div class="form-group col-md-12">
            <label for="ingredients">Inhaltsstoffe:</label>
            <textarea class="form-control" id="ingredients" name="ingredients" rows="3">{{$product[0]->inhaltsstoffe}}</textarea>
        </div>

        <br>
        <div class="form-row">
        <input class="btn btn-primary col-md-12" type="submit" value="Änderungen speichern.">
        </div>
    </form>

@endsection

@section('scripts')

    <script>
        $(document).ready(function() {
            $('.productTypeMultiselect').select2();
        });
    </script>

    <script>
        document.getElementById('boxProductType').onchange = function() {
            document.getElementById('textProductType').disabled = !this.checked;
        };
    </script>

@endsection


