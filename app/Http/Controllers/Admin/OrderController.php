<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\orderItem;

class OrderController extends Controller
{

    public function index()
    {
        $orders = Order::where('status', '0')->get(); 
       return view('admin.order.index', compact('orders'));
    }

    public function view($id)
    {

            $orders= order::where('id', $id)->first();

        return view('admin.order.view-order', compact('orders'));
    }

    public function update(Request $req, $id)
    {
      $orders = order::find($id);
      $orders->status = $req->input('order-status');
      $orders->update();
      return redirect('dashboard/order')->with('status', 'Update Successfully');
    }

    public function order_history()
    {
        $orders = order::where('status', '1')->get();
       return view('admin.order.history', compact('orders'));
    }
}
