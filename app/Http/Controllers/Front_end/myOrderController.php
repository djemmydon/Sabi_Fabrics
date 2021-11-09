<?php

namespace App\Http\Controllers\Front_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\order;
use App\Models\orderItem;


class myOrderController extends Controller
{
        public function my_order()
        {   
            //my order
                $orders = order::where('user_id', Auth::id())->get();
            return view('frontend.order.index', compact('orders'));
        }

        public function view($id)
        {
            $orders= order::where('id', $id)->where('user_id', Auth::id())->first();
            return view('frontend.order.view-details', compact('orders'));
        }
            
        
}
