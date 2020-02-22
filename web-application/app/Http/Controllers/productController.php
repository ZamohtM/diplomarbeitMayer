<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class productController extends Controller
{
    public function onOpenNewProdukt()
    {
        $productTypes = DB::select('select * from producttype');
        return view('products.new_product', ['productTypes' => $productTypes]);
    }

    public function onSubmitNewProdukt(Request $request)
    {
        $product = new Product();

        $product->name = $request->name;
        $product->hersteller = $request->producer;
        $product->produktart = implode(',',$request->productTypeOption);
        $product->verpackung = $request->wrapping;
        $product->inhaltsstoffe = $request->ingredients;
        $product->product_img = "http://localhost/upload/products/".$request->name."/picture.jpg";
        $request->product_img->storeAs('upload/products/'.$request->name.'/', 'picture.jpg');

        $product->save();

        return redirect('/');
    }

    public function onOpenManageProdukte()
    {
        $products = DB::select('select * from products');
        return view('products.manage_products', ['products' => $products]);
    }

    public function onOpenManageProdukteDelete($id)
    {
        DB::table('products')->where('id',$id)->delete();
        return redirect('/');
    }

    public function onOpenManageProdukteEdit($id)
    {
        $productTypes = DB::select('select * from producttype');
        $product = DB::table('products')->where('id',$id)->get();
        return view('products.edit_product', ['productTypes' => $productTypes, 'product' => $product]);
    }

    public function onSaveManageProdukteEdit($id, Request $request)
    {
        DB::table('products')->where('id',$id)->update([
            'name' => $request->name,
            'hersteller' => $request->producer,
            'verpackung' => $request->wrapping,
            'inhaltsstoffe' => $request->ingredients
        ]);

        if (isset($request->boxProductType)) {
            DB::table('products')->where('id', $id)->update([
                'produktart' => implode(',', $request->productTypeOption)
            ]);
        }

        return redirect('/');
    }

    public function onOpenManageProdukteProdukt($id)
    {
        $product = DB::table('products')->where('id',$id)->get();
        return view('products.view_product', ['product' => $product]);
    }
}
