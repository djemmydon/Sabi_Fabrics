@extends('layouts.admin');

@section('content')

<div class="card">
  <div class="card-header bg-primary ">
       <h2>New Orders
         <a href="{{url('order-history')}}" class="btn btn-sm btn-outline-danger float-right">Oder History</a>
       </h2>
  </div>
    <div class="card-body">
     
   
          <table class="table">
  <thead>
    <tr>
      <th scope="col">Orders Date</th>
      <th scope="col">Total Price</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
        @foreach ($orders as $item)
    <tr>
  
      <th scope="row">{{ date('d-m-Y', strtotime ($item->created_at))}}</th>
      <th scope="row">{{$item->total_price}}</th>
      <td>{{$item->fname}}</td>
      <td>{{$item->status == '0' ? 'pending':'completed'}}</td>
    
      <td>

        <a href="{{url('dashboard/order/view-orders/'.$item->id)}}" class="btn btn-primary">View</a>
      </td>

  @endforeach
    
  </tbody>
</table>
    </div>
</div>
    @endsection