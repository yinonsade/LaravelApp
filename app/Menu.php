<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Menu extends Model
{
    public static function save_new($request)
    {
        $menu = new self();
        $menu->link = $request['link'];
        $menu->url = $request['url'];
        $menu->title = $request['title'];
        $menu->save();
        Session::flash('toastrpos', 'toast-top-center');
        Session::flash('sm', 'Menu Saved!');

    }

    public static function update_item($request, $id)
    {
        $menu = Menu::find($id);
        $menu->link = $request['link'];
        $menu->url = $request['url'];
        $menu->title = $request['title'];
        $menu->save();
        Session::flash('toastrpos', 'toast-top-center');
        Session::flash('sm', 'Menu Updated!');
    }
}