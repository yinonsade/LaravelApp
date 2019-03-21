<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Http\Requests\ProductRequest;
use App\Product;
use Session;

class ProductsController extends MainController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        self::$data['products'] = Product::all()->toArray();
        return view('cms.products', self::$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        self::$data['categories'] = Categorie::all()->toArray();
        return view('cms.add_product', self::$data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {

        Product::save_new($request);
        return redirect('cms/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        self::$data['item_id'] = $id;
        return view('cms.delete_product', self::$data);
    }
    public function edit($id)
    {
        self::$data['categories'] = Categorie::all()->toArray();
        self::$data['item'] = Product::find($id)->toArray();
        return view('cms.edit_product', self::$data);
    }

    public function update(ProductRequest $request, $id)
    {
        Product::update_item($request, $id);
        return redirect('cms/products');

    }

    public function destroy($id)
    {
        Product::destroy($id);
        Session::flash('sm', 'Item deleted!');
        return redirect('cms/products');
    }
}