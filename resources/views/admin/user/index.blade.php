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
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">State</th>

    </tr>
  </thead>
  <tbody>
        @foreach ($users as $item)
    <tr>
  
      <th scope="row">{{$item->name}}</th>
      <th scope="row">{{$item->email}}</th>
      <td>{{$item->phone}}</td>
      <td>{{$item->state}}</td>
    


  @endforeach
    
  </tbody>
</table>
    </div>
</div>


    @endsection