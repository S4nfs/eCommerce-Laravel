<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    function index()
    {
        $data = Product::all();
        return view('product', ['products' => $data]);
    }

    function productDetail($id)
    {
        $data = Product::find($id);
        return view('detail', ['product' => $data]);
    }
    function addToCart(Request $req)
    {
        if ($req->session()->has('user')) {
            $cart = new Cart;   
            $cart->user_id = $req->session()->get('user')[0]->id;
            $cart->product_id = $req->product_id;
            $cart->save();

        } else {
            return redirect('/login');
        }
    }

    function countCartItem(){
        $userId = Session::get('user')[0]->id;
        return Cart::where('user_id', $userId)->count();
    }

    function mycartlist(){
        $userId = Session()->get('user')[0]->id;
        $fetchAllCart = DB::table('cart')->join('products', 'cart.product_id', '=', 'products.id')->where('cart.user_id', $userId)->select('products.*')->get();

        return view('cartlist', ['products' => $fetchAllCart]);

    
    }
}
