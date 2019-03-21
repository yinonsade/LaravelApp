<?php

namespace App\Http\Controllers;

use App\Order;

class CmsController extends MainController
{

    public function dashboard()
    {
        return view('cms.dashboard', self::$data);
    }

    public function orders()
    {
        self::$data['orders'] = Order::getAll();
        return view('cms.orders', self::$data);
    }

}
