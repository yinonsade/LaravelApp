<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;
use Session;

class Content extends Model
{

    public static function getAll($url, &$data)
    {
        $contents = DB::table('contents AS c')
            ->join('menus AS m', 'm.id', '=', 'c.menu_id')
            ->where('m.url', '=', $url)
            ->select('m.title AS mtitle', 'c.*')
            ->get()
            ->toArray();

        if (!$contents) {
            abort(404);
        } else {
            $data['pageTitle'] .= $contents[0]->mtitle;
            $data['contents'] = $contents;
        }

    }

    public static function save_new($request)
    {
        $content = new self();
        $content->menu_id = $request['menu_id'];
        $content->title = $request['title'];
        $content->article = $request['article'];
        $content->save();
        Session::flash('toastrpos', 'toast-top-center');
        Session::flash('sm', 'Content saved!');
    }

    public static function update_item($request, $id)
    {
        $content = self::find($id);
        $content->menu_id = $request['menu_id'];
        $content->title = $request['title'];
        $content->article = $request['article'];
        $content->save();
        Session::flash('toastrpos', 'toast-top-center');
        Session::flash('sm', 'Content Updated!');

    }

}