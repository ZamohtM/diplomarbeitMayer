@extends('layouts.master')

@section('content')

    <h3>Anlegen: Neues Produkt</h3>
    <hr>
    <form method="POST" action="/manage/save-produkt" enctype="multipart/form-data">

        @csrf

        <div class="form-group col-md-12">
            <label for="name">Produktname:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="form-group col-md-12">
            <label for="producer">Hersteller:</label>
            <input type="text" class="form-control" id="producer" name="producer">
        </div>

        <div class="form-group col-md-12">
            <label for="productType">Produktart:</label><br>
            <select class="productTypeMultiselect" name="productTypeOption[]" style="width:100%">
                <option disabled selected value></option>
                @foreach($productTypes as $productType)
                    <option>{{$productType->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-md-12">
            <label for="wrapping">Verpackung:</label>
            <input type="text" class="form-control" id="wrapping" name="wrapping">
        </div>

        <div class="form-group col-md-12">
            <label for="ingredients">Inhaltsstoffe:</label>
            <textarea class="form-control" id="ingredients" name="ingredients" rows="3"></textarea>
        </div>

        <div class="form-group col-md-2">
            <label for="product_img">Produktbild:</label>
            <input type="file" class="form-control-file" id="product_img" name="product_img">
        </div>

        <br>
        <div class="form-row">
        <input class="btn btn-primary col-md-12" type="submit" value="Erstellen eines neuen Mitarbeiters.">
        </div>
    </form>

@endsection

@section('scripts')

    <script>
        $(document).ready(function() {
            $('.productTypeMultiselect').select2();
        });
    </script>

@endsection


