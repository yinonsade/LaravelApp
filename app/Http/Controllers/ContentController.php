<?php

namespace App\Http\Controllers;

use App\Content;
use App\Http\Requests\ContentRequest;
use Session;

class ContentController extends MainController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        self::$data['content'] = Content::all()->toArray();
        return view('cms.content', self::$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cms.add_content  ', self::$data);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContentRequest $request)
    {

        Content::save_new($request);
        return redirect('cms/content');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        self::$data['item_id'] = $id;
        return view('cms.delete_content', self::$data);
    }
    public function edit($id)
    {
        self::$data['item'] = Content::find($id)->toArray();
        return view('cms.edit_content', self::$data);
    }

    public function update(ContentRequest $request, $id)
    {
        Content::update_item($request, $id);
        return redirect('cms/content');

    }

    public function destroy($id)
    {
        Content::destroy($id);
        Session::flash('sm', 'Item deleted!');
        return redirect('cms/content');
    }
}