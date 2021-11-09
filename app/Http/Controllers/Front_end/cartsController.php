<?php

namespace App\Http\Controllers\Front_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class cartsController extends Controller
{
      public function cart(Request $req)
      {
       
                $prod_id = $req->input('product_id');
                $prod_yards = $req->input('product_yards');


                if (Auth::check()) {
                $prod_check= Product::where('id', $prod_id)->first();


            if ($prod_check) {

                        if (Cart::where('prod_id', $prod_id)->where('user_id', Auth::id())->exists()) {
                                    return response()->json(['status' => 'Already added to cart']);
                        }

                        else {
                                                $cartItem = new Cart();
                                            $cartItem->prod_id = $prod_id;
                                            $cartItem->prod_yards = $prod_yards;
                                            $cartItem->user_id= Auth::id();
                                            $cartItem->save();
                                            return response()->json(['status' => 'Add to cart']);

            
                        }
                    }
    }

                else {
                    return response()->json(['status' => 'Login to continue']);
                } 


           
      }

           public function addtocart()
                {
                    $cartsItem = Cart::where('user_id', Auth::id())->get();
                  return view('frontend.carts', compact('cartsItem'));
                }

                public function remove(Request $request)
                {
                    if (Auth::check()) {
                            $prod_id=$request->input('prod_id');
                            if (Cart::where('prod_id',$prod_id)->where('user_id', Auth::id())->exists())
                             {
                          $carting=Cart::where('prod_id',$prod_id)->where('user_id', Auth::id())->first();
                          $carting->delete();
                    return response()->json(['status' => 'Remove Successfully']);

                            }
                    }
                    else {
                    return response()->json(['status' => 'Login to continue']);
                        
                    }
                    
                }

                public function update(Request $req)
                {
                   $product_id = $req->input('prod_id');
                   $product_yards = $req->input('prod_yards');

                   if (Auth::check()) {
                    if (Cart::where('prod_id',$prod_id)->where('user_id', Auth::id())->exists()) {
                        $cart = Cart::where('prod_id',$prod_id)->where('user_id', Auth::id())->first();
                        $cart->prod_yards = $product_yards;
                        $cart->update();
                        return  response()->json('status', 'Cart updated successfully');
                    }


                   }
                }
}
