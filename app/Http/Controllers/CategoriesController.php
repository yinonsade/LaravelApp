<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Http\Requests\CategoryRequest;
use Session;

class CategoriesController extends MainController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        self::$data['categories'] = Categorie::all()->toArray();
        return view('cms.categories', self::$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.add_category', self::$data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {

        Categorie::save_new($request);
        return redirect('cms/categories');
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
        return view('cms.delete_category', self::$data);
    }
    public function edit($id)
    {
        self::$data['item'] = Categorie::find($id)->toArray();
        return view('cms.edit_category', self::$data);
    }

    public function update(CategoryRequest $request, $id)
    {
        Categorie::update_item($request, $id);
        return redirect('cms/categories');

    }

    public function destroy($id)
    {
        Categorie::destroy($id);
        Session::flash('sm', 'Item deleted!');
        return redirect('cms/categories');
    }
}