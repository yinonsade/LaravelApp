<?php

namespace App;

use App\Emails;
use Cart;
use DB;
use Illuminate\Database\Eloquent\Model;
use Session;

class Order extends Model
{

    public static function save_new()
    {

        $order = new self();
        $order->user_id = Session::get('user_id');
        $order->total = Cart::getTotal();
        $order->data = serialize(Cart::getContent()->toArray());
        $order->save();
        //Emails::newOrder();//ADD BACK WHEN GO PRO (SEEMS TO MAKE PROBLEM WITH TO MANY MAILS...)
        Emails::newInvoice();
        Session::flash('toastrpos', 'toast-top-center');
        Session::flash('sm', 'Your order was saved!');
        Cart::clear();

    }
    public static function getAll()
    {
        return DB::table('orders AS o')
            ->join('users AS u', 'u.id', '=', 'o.user_id')
            ->select('u.*', 'o.*')
            ->orderBy('o.created_at', 'desc')
            ->get()
            ->toArray();
    }
    public static function getLast()
    {
        return DB::table('orders AS o')
            ->join('users AS u', 'u.id', '=', 'o.user_id')
            ->select('u.*', 'o.*')
            ->orderBy('o.created_at', 'desc')
            ->limit(1)
            ->get()
            ->toArray();
    }

    public static function pay()
    {

        $pay = new self();
        $pay->user_id = Session::get('user_id');
        $pay->total = Cart::getTotal();
        $pay->data = serialize(Cart::getContent()->toArray());

    }

}