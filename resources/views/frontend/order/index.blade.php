@extends('layouts.front')

@section('title')
    FABRI8 | Orders
@endsection
@section('content')
<div class="card container mt-5">

  <table class="table">
  <thead>
    <tr>
      <th scope="col">Traking No.</th>
      <th scope="col">Total Price</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
        @foreach ($orders as $item)
    <tr>
  
      <th scope="row">{{$item->tracking_no}}</th>
      <td>{{$item->total_price}}</td>
      
      <td>{{$item->status == '0' ? 'Pending' : 'Completed'}}</td>
      <td>
          <a class="btn btn-primary btn-outline" href="{{url('my-order/view-details/'.$item->id)}}">View</a>
      </td>
    
     
    </tr>

      
  @endforeach
  </tbody>
</table>
</div>
@endsection