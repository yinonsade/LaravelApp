<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Order;
use App\Product;
use App\User;
use Cart;
use Illuminate\Http\Request;
use Session;

class ShopController extends MainController
{

    /**
     * Get products categories from db.
     */

    public function categories()
    {
        self::$data['pageTitle'] .= 'Shop categories';
        self::$data['categories'] = Categorie::all()->toArray();
        return view('content.categories', self::$data);
    }
    /**
     * Get products by categories from db.
     */
    public function products(Request $request, $curl)
    {
        Product::getProducts($curl, self::$data, $request);
        self::$data['categories'] = Categorie::all()->toArray();
        return view('content.products', self::$data);

    }

    /**
     * Get all products from db.
     */
    public function allProducts(Request $request)
    {
        $all = Product::getAllProducts($request);
        self::$data['allProducts'] = $all;
        self::$data['pageTitle'] .= 'All-products';
        self::$data['categories'] = Categorie::all()->toArray();
        return view('content.all-products', self::$data);

    }
    /**
     * Get items from db.
     */
    public function item($curl, $purl, Request $request)
    {

        Product::getItem($purl, self::$data, $request);
        self::$data['categories'] = Categorie::all()->toArray();
        self::$data['size'] = $request['size'];
        return view('content.item', self::$data);
    }
    /**
     * adding new items to cart.
     */
    public function addToCart(Request $request)
    {
        Product::addToCart($request['pid'], $request['usersize'], $request['usercolor']);

    }
    /**
     * Get products from cart and pass it into checkout view.
     */
    public function checkout()
    {
        self::$data['pageTitle'] .= 'Checkout page';
        $cart = Cart::getContent()->toArray();
        sort($cart);
        self::$data['cart'] = $cart;
        return view('content.checkout', self::$data);
    }
    /**
     * Clearing the cart.
     */
    public function clearCart()
    {
        Cart::clear();
        return redirect('shop/checkout');
    }
    /**
     * Updating the cart.
     */
    public function updateCart(Request $request)
    {
        Product::updateCart($request);
        return redirect('shop/checkout');
    }
    /**
     * removing one item from the cart.
     */
    public function removeItem(Request $request)
    {
        Cart::remove($request['pid']);
        return redirect('shop/checkout');

    }
    /**
     *saving user new order into db
     */
    public function order()
    {
        if (Cart::isEmpty()) {
            return redirect('shop/checkout');
        } else {
            if (!Session::has('user_id')) {
                return redirect('user/signin?rn=shop/checkout');
            } else {
                Order::save_new();
                return redirect('shop');

            }
        }
    }

    /**
     * payment with paypal.
     */

    public function payment()
    {
        $cart = Cart::getContent()->toArray();
        $paymentTotal = Cart::getTotal();
        $userProfile = User::getUser();
        self::$data['getProfile'] = $userProfile;
        self::$data['cart'] = $cart;
        self::$data['paymentTotal'] = $paymentTotal;
        self::$data['pageTitle'] .= 'Payment';
        if (!Session::has('user_id')) {
            Session::flash('toastrpos', 'toast-top-center');
            Session::flash('sm', 'Please signin/up before submiting your payment!');
            return redirect('user/signin?rn=shop/payment');
        } else {
            return view('content.payment', self::$data);
        }
    }

}