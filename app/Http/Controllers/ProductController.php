<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function index()
    {
        $data = Product::all();
        return view('product', ['products' => $data]);
    }
    //--------------------------------------------------------------------------------------------------------------------
    function productDetail($id)
    {
        $data = Product::find($id);
        return view('detail', ['product' => $data]);
    }
    //--------------------------------------------------------------------------------------------------------------------
    function addToCart(Request $req)
    {
        if ($req->session()->has('user')) {
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')[0]->id;
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/cartlist');
        } else {
            return redirect('/login');
        }
    }
    //--------------------------------------------------------------------------------------------------------------------
    function countCartItem()
    {
        $userId = Session::get('user')[0]->id;
        return Cart::where('user_id', $userId)->count();
    }
    //--------------------------------------------------------------------------------------------------------------------
    function mycartlist()
    {
        if (session()->has('user')) {
            $userId = Session()->get('user')[0]->id;
            $fetchAllCart = DB::table('cart')->join('products', 'cart.product_id', '=', 'products.id')->where('cart.user_id', $userId)->select('products.*', 'cart.id as cart_id')->get();
            return view('cartlist', ['products' => $fetchAllCart]);
            // return ['products' => $fetchAllCart];
        } else {
            return redirect('login');
        }
    }
    //--------------------------------------------------------------------------------------------------------------------
    function removecart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }
    //--------------------------------------------------------------------------------------------------------------------
    function checkout()
    {
        if (session()->has('user')) {
            $userId = Session()->get('user')[0]->id;
            $products = DB::table('cart')->join('products', 'cart.product_id', '=', 'products.id')->where('cart.user_id', $userId)->sum('products.price');
            $getuser = DB::table('users')->where('id', $userId)->get();
            $productShowcase = DB::table('cart')->join('products', 'cart.product_id', '=', 'products.id')->where('cart.user_id', $userId)->get('products.*');
            return view('order', ["total" => $products, "getuser" => $getuser, "productShowcase" => $productShowcase]);
            // return ["total" => $products, "getuser" => $getuser, "productShowcase" => $productShowcase];
            // return ["total" => $products] ["getuser" => $getuser] ["productShowcase" => $productShowcase];



        } else {
            return redirect('login');
        }
    }
    //--------------------------------------------------------------------------------------------------------------------
    function orderPlace(Request $req)
    {
        if (session()->has('user')) {
            $userId = Session()->get('user')[0]->id;
            $allCart = Cart::where('user_id', $userId)->get();
            foreach ($allCart as $cart) {
                $order = new Order;
                $order->product_id = $cart['product_id'];
                $order->user_id = $cart['user_id'];
                $order->status = "Ordered";
                $order->country = $req->country;
                $order->zipcode = $req->zipcode;
                $order->state = $req->state;
                $order->address = $req->address;
                $order->save();
                Cart::where('user_id', $userId)->delete();
            }

            //bootstrap alert notificatcation on order success after redirecting to home page
            return redirect('/')->with('jsalert', 'Order Placed Successfully');
        } else {
            return redirect('login');
        }
    }
    //--------------------------------------------------------------------------------------------------------------------
    function myOrders()
    {
        if (session()->has('user')) {
            $userId = Session()->get('user')[0]->id;
            $myorders =  db::table('orders')->join('products', 'orders.product_id', '=', 'products.id')->where('orders.user_id', $userId)->get();
            return view('myorders', ["fetchOrders" => $myorders]);
        }
    }
    //--------------------------------------------------------------------------------------------------------------------
    function searchProducts(Request $req)
    {
        $search = $req->search; //can also use If(request('search')) 
        if ($search != "") {
            $data = Product::Where('category', 'like', '%' . $search . '%')->orWhere('description', 'like', '%' . $search . '%')->get();
            return view('searchresults', ['sproducts' => $data]);
        } else {
            return redirect('/')->with('jsalert', 'No Products Found');
        }
    }

    //--------------------------------------------------------------------------------------------------------------------
    function uploader(Request $req)
    {
        if (session()->has('user')) {
            $userId = Session()->get('user')[0]->id;
            if ($req->hasFile('image')) {
                $myavatarName = $req->image->getClientOriginalName();
                $req->image->storeAs('avatars', $myavatarName, 'public'); //('folder', $filename, 'directory')
                User::find($userId)->update(['avatar' => $myavatarName]);
            }
            return redirect()->back();
        } else {
            return redirect('login');
        }
    }


    function fetchprofile()
    {
        if (session()->has('user')) {
            $userId = Session()->get('user')[0]->id;
            //get user data
            $user = User::find($userId);
            return view('profile', ['userdata' => $user]);
        } else {
            return redirect('login');
        }
    }
}
