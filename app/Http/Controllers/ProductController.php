<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Session;
use App\Cart;
use Response;


class ProductController extends Controller
{
    public function getIndex()

    {
        $products = Product::all();
        return view('shop.welcome', ['products' =>$products]);
    }

    public function searchCode(Request $request) 
    {

        $Search=$request->searchCode;
        
        $products = DB::table('products')
        ->where('title','like',$Search)
        ->get();

        if($products->isEmpty())

        { 
            Session::flash('message', 'Pas de correspondance'); 
            Session::flash('alert-class', 'alert-success'); 
            $products = DB::table('products')->get();
            return view('shop.welcome', ['products' =>$products]);
        }

        else

        {
            Session::flash('message', 'Résultat(s)'); 
            Session::flash('alert-class', 'alert-success'); 
            return view('shop.welcome', ['products' =>$products]);
        }
    }

    public function searchNes() 
    {
         $products = DB::table('products')
        ->where('category','like','NES')
        ->get();
        return view('shop.welcome', ['products' =>$products]);

    }


    public function searchSnes() 
    {
         $products = DB::table('products')
        ->where('category','like','SNES')
        ->get();
         return view('shop.welcome', ['products' =>$products]);

    }

    public function searchGamecube() 
    {
          $products = DB::table('products')
        ->where('category','like','GAMECUBE')
        ->get();
          return view('shop.welcome', ['products' =>$products]);

    }

    public function searchN64() 
    {
         $products = DB::table('products')
        ->where('category','like','N64')
        ->get();
         return view('shop.welcome', ['products' =>$products]);

    }


    public function getAddToCart(Request $request, $id)
    {
         $product = Product::find($id);
         $oldCart = Session::has('cart') ? Session::get('cart') : null;
         $cart = new Cart($oldCart);
         $cart->add($product, $product->id);
         $request->session()->put('cart',$cart);
         Session::flash('message', 'Ajouté au panier'); 
         Session::flash('alert-class', 'alert-success'); 
         return redirect()->route('product.index');

    }

    public function getRemToCart()
    {
        $oldcart=null;
        $cart=null;
        $cart = new Cart($oldcart);
        Session::put('cart');
        return view('shop.shopping-cart');

    }

    public function getCart()
    {
        
        if(!Session::has('cart'))
        {
            return view('shop.shopping-cart');
        }

        $oldcart = Session::get('cart');
        $cart = new Cart($oldcart);
        return view('shop.shopping-cart', ['products' =>$cart->items, 'totalPrice' => $cart->totalPrice]);
     }

    public function getCheckout() 
    {

        if(!Session::has('cart')) 
        {
            return view('shop.shopping-cart');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total=$cart->totalPrice;
        return view('shop.checkout', ['total' => $total]);
    }
}
