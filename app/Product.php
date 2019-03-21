<?php

namespace App;

use Cart;
use DB;
use Illuminate\Database\Eloquent\Model;
use Image;
use Session;

class Product extends Model
{

    public static function getProducts($curl, &$data, $request)
    {
        $sort = $request['ob'];
        $res2 = 'asc';
        if ($sort == 1) {
            $res = 'price';
        } elseif ($sort == 2) {
            $res = 'price';
            $res2 = 'desc';
        } else {
            $res = 'ptitle';
        }

        $products = DB::table('products AS p')
            ->join('categories AS c', 'c.id', '=', 'p.categorie_id')
            ->select('c.ctitle', 'c.curl', 'p.*')
            ->where('c.curl', '=', $curl)
            ->orderby($res, $res2)
            ->paginate(6);

        if (!$products->count()) {
            abort(404);
        } else {

            $data['pageTitle'] .= $products[0]->ctitle . ' products';
            $data['products'] = $products;
        }
    }

    public static function getItem($purl, &$data)
    {

        if ($item = Product::where('purl', '=', $purl)->first()) {
            $item = $item->toArray();
            $data['pageTitle'] .= $item['ptitle'];
            $data['product'] = $item;
        } else {
            abort(404);
        }
    }

    public static function addToCart($pid, $usersize, $usercolor)
    {
        if (!$usersize) {
            $usersize = 'M';
            $usercolor = 'As image';
        }

        if ($product = self::find($pid)) {
            $product = $product->toArray();
            if (!Cart::get($pid)) {
                Cart::add($pid, $product['ptitle'], $product['price'], 1, ['image' => $product['pimage'], 'size' => $usersize, 'color' => $usercolor]);
                Session::flash('toastrpos', 'toast-top-center');
                Session::flash('sm', $product['ptitle'] . ' added to cart!');
            }

        }

    }

    public static function updateCart($request)
    {

        if (!empty($request['pid']) && !empty($request['op'])) {
            if (is_numeric($request['pid'])) {
                if ($request['op'] == 'plus') {
                    Cart::update($request['pid'], ['quantity' => 1]);
                } else if ($request['op'] == 'minus') {
                    Cart::update($request['pid'], ['quantity' => -1]);

                }
            }
        }

    }

    public static function save_new($request)
    {
        $image_name = 'default.jpg';
        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $file = $request->file('image');
            $image_name = date('d.m.Y.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move(public_path() . '/images', $image_name);
            $img = Image::make(public_path() . '/images/' . $image_name);
            $img->resize(540, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save();
        }

        $image_name2 = 'default.jpg';
        if ($request->hasFile('image2') && $request->file('image2')->isValid()) {

            $file = $request->file('image2');
            $image_name2 = date('d.m.Y.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image2')->move(public_path() . '/images', $image_name2);
            $img = Image::make(public_path() . '/images/' . $image_name2);
            $img->resize(540, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save();
        }

        if ($request['size']) {
            $size = $request['size'];

        } else {
            $size = 'N/A';

        }

        if ($request['color']) {
            $color = $request['color'];
        } else {
            $color = 'N/A';
        }

        $product = new self();
        $product->categorie_id = $request['categorie_id'];
        $product->ptitle = $request['title'];
        $product->particle = $request['article'];
        $product->pimage = $image_name;
        $product->pimage2 = $image_name2;
        $product->price = $request['price'];
        $product->purl = $request['url'];
        $product->size = $size;
        $product->color = $color;
        $product->save();
        Session::flash('toastrpos', 'toast-top-center');
        Session::flash('sm', 'Product saved!');
    }

    public static function update_item($request, $id)
    {
        $image_name = '';
        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $file = $request->file('image');
            $image_name = date('d.m.Y.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move(public_path() . '/images', $image_name);
            $img = Image::make(public_path() . '/images/' . $image_name);
            $img->resize(540, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save();
        }

        $image_name2 = 'default.jpg';
        if ($request->hasFile('image2') && $request->file('image2')->isValid()) {

            $file = $request->file('image2');
            $image_name2 = date('d.m.Y.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image2')->move(public_path() . '/images', $image_name2);
            $img = Image::make(public_path() . '/images/' . $image_name2);
            $img->resize(540, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save();
        }
        if ($request['size']) {
            $size = $request['size'];

        } else {
            $size = 'N/A';

        }

        if ($request['color']) {
            $color = $request['color'];
        } else {
            $color = 'N/A';
        }
        $product = self::find($id);
        $product->categorie_id = $request['categorie_id'];
        $product->ptitle = $request['title'];
        $product->particle = $request['article'];
        $product->size = $size;
        $product->color = $color;
        if ($image_name) {
            $product->pimage = $image_name;

        }
        if ($image_name2) {
            $product->pimage2 = $image_name2;

        }
        $product->price = $request['price'];
        $product->purl = $request['url'];
        $product->save();
        Session::flash('toastrpos', 'toast-top-center');
        Session::flash('sm', 'Product updated!');
    }

    public static function getAllProducts($request)
    {

        $sort = $request['ob'];
        $res2 = 'asc';
        if ($sort == 1) {
            $res = 'price';
        } elseif ($sort == 2) {
            $res = 'price';
            $res2 = 'desc';
        } else {
            $res = 'ptitle';
        }

        $products = DB::table('products AS p')
            ->join('categories AS c', 'c.id', '=', 'p.categorie_id')
            ->select('c.ctitle', 'c.curl', 'p.*')
            ->orderby($res, $res2)
            ->get()
            ->toArray();
        return $products;
    }

}