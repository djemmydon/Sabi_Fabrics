<?php

namespace App\Http\Controllers\Front_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\order;
use App\Models\User;
use App\Models\orderitem; 
use Illuminate\Support\Facades\Auth;

class checkoutController extends Controller
{
public function check()
{
        $product = Cart::where('user_id', Auth::id())->get();
        return view('frontend.checkout.index', compact('product'));
}

public function placeOrder(Request $request)
{
       $order = new order();
       
       $order->user_id = Auth::id();
       $order->fname = $request->input('fname');
       $order->lname = $request->input('lname');
       $order->email = $request->input('email');
       $order->phone = $request->input('phone');
       $order->address = $request->input('address');
       $order->city = $request->input('city');
       $order->state = $request->input('state');
       $order->zipcode = $request->input('zipcode');
       //total price
       $total = 0;
             $carts_total_price = Cart::where('user_id', Auth::id())->get();
             foreach ($carts_total_price as $prod) {
                   $total += $prod->products->selling_price * $prod->prod_yards;
             }   
             $order->total_price = $total;
           $order->tracking_no = 'Fabric8'.rand(1111, 9999);
          $order->save();
        
          $cartsItem = Cart::where('user_id', Auth::id())->get();
         foreach($cartsItem as $item){
                orderItem::create([
                        'order_id'=>$order->id,
                        'prod_id'=>$item->prod_id,
                        'quantity'=>$item->prod_yards,
                        'price'=>$item->products->selling_price,
                ]);    
                
                if (Auth::user()->address == NULL) {
                $user = User::where('id', Auth::id())->first();
        $user->fname = $request->input('fname');
       $user->lname = $request->input('lname');
       $user->phone = $request->input('phone');
       $user->address = $request->input('address');
       $user->city = $request->input('city');
       $user->state = $request->input('state');
       $user->update();
                }
                 $cartsItem = Cart::where('user_id', Auth::id())->get();

                Cart::destroy($cartsItem);

                return redirect('/')->with('status', 'Order placed successfully');
        }
         }
     
}
