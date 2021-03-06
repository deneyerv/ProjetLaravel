<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Session;
use App\Cart;
use Response;
use Stripe\Charge;
use Stripe\Stripe;


class ProductController extends Controller
{
    public function getIndex()

    {
        $products = Product::all();


        return view('shop.welcome', ['products' =>$products]);

      /*  $search = \Request::get('search');
        $products = Product::where('title','like','%'.$search);
          return view('shop.welcome', ['products' =>$products]);*/


    }

    public function searchCode(Request $request) {

        $Search=$request->searchCode;
        //$products= DB::table('products')->where('title',"%$Search%");
       // $products = Product::select('select * from products where title = Montagne', [1]);
$products = DB::table('products')
        ->where('title','like',$Search)
        ->get();


        if($products == null)

        { return view('shop.welcome', ['products' =>$products]);}

        else{
       // $products = Product::all(['id', 'name']);
        return view('shop.welcome', ['products' =>$products]);

            }
       // $user = DB::table('users')->where('name', 'John')->first();

    }

    public function searchNes() {


        //$products= DB::table('products')->where('title',"%$Search%");
        // $products = Product::select('select * from products where title = Montagne', [1]);
        $products = DB::table('products')
            ->where('category','like','NES')
            ->get();


            return view('shop.welcome', ['products' =>$products]);

        }


    public function searchSnes() {


        //$products= DB::table('products')->where('title',"%$Search%");
        // $products = Product::select('select * from products where title = Montagne', [1]);
        $products = DB::table('products')
            ->where('category','like','SNES')
            ->get();


        if($products == null)
        {
            $products = Product::all();
            return view('shop.welcome', ['products' =>$products]);}

        else{
            // $products = Product::all(['id', 'name']);
            return view('shop.welcome', ['products' =>$products]);

        }}

    public function searchGamecube() {


        //$products= DB::table('products')->where('title',"%$Search%");
        // $products = Product::select('select * from products where title = Montagne', [1]);
        $products = DB::table('products')
            ->where('category','like','GAMECUBE')
            ->get();


        return view('shop.welcome', ['products' =>$products]);

    } public function searchN64() {


    //$products= DB::table('products')->where('title',"%$Search%");
    // $products = Product::select('select * from products where title = Montagne', [1]);
    $products = DB::table('products')
        ->where('category','like','N64')
        ->get();


    return view('shop.welcome', ['products' =>$products]);

}


    public function getAddToCart(Request $request, $id){


        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);


        $request->session()->put('cart',$cart);
        //dd($request->session()->get('cart'));
        return redirect()->route('product.index');

    }

    public function getRemToCart(Request $request, $id){


        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);

        $cart->unset($product, $product->id);

        $request->session()->put('cart',$cart);
        //dd($request->session()->get('cart'));
        return redirect()->route('product.index');

    }

    public function getCart()
    {
        if(!Session::has('cart')){



            return view('shop.shopping-cart');
        }

        $oldcart = Session::get('cart');
        $cart = new Cart($oldcart);

        return view('shop.shopping-cart', ['products' =>$cart->items, 'totalPrice' => $cart->totalPrice]);

    }

public function getCheckout() {

        if(!Session::has('cart')) {
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total=$cart->totalPrice;
        return view('shop.checkout', ['total' => $total]);
}

public function postCheckout(Request $request) {

        if(!Session::has('cart')) {
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        
         
         Stripe::setApiKey('sk_test_7UScIyHYCfZ5HUJOzBmzuejh');
         try{

            Charge::create(array(
                "amount"=>$cart->totalPrice,
                "currency"=>"eur",
                
                
                "description" =>"testinng"


                ));

        }

        catch (Exception $e) {
            return redirect()->route('checkout')->with('error', $e->getMessage());
         }

         Session::forget('cart');
         return redirect()->route('checkout')->with('success', 'Achat effectué');
        }



}

