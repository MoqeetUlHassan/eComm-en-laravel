<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    function index(){
        $data  = Product::all();
            return view('product',['products' =>$data]);
    }

    function detail($id){
       $data = Product::find($id);
       return view('detail',['prodetail' =>$data]);
    }

    static function cartItem(){
        $userID= Session::get('user')['id'];
        return Cart::where('user_id',$userID)->count();
    }

    function addToCart(Request $request){
        if($request->session()->has('user')){  
            $cart= new Cart();
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $request->product_id;
            $cart->save();
            
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
        }

}
