@extends('layouts.front')

@section('title')
    FABRI8 | Details
@endsection
@section('content')

        <div class="container m-4">
            <div class="row">
                
                    <div class="col-md-6    card m-3">
                    <label>First Name</label>
                    <div class="border py-1">
                        <h6>{{$orders->fname}}</h6>
                    </div>
                    <label>Last Name</label>
                    <div class="border py-1">
                        <h6>{{$orders->lname}}</h6>
                    </div>
                    <label>Email </label>
                    <div class="border py-1">
                        <h6>{{$orders->Email}}</h6>
                    </div>
                    <label>Phone Number</label>
                    <div class="border py-1">
                        <h6>{{$orders->phone}}</h6>
                    </div>
                    <label>Adderess</label>
                    <div class="border py-1">
                        <h6>{{$orders->address}}</h6>
                    </div>
                    <label>City</label>
                    <div class="border py-1">
                        <h6>{{$orders->city}}</h6>
                    </div>
                    <label>State</label>
                    <div class="border py-1">
                        <h6>{{$orders->state}}</h6>
                    </div>
                    <label>Zipcode</label>
                    <div class="border py-1">
                        <h6>{{$orders->zipcode}}</h6>
                    </div>
                    <label>Zipcode</label>
                    <div class="border py-1">
                        <h6>{{$orders->zipcode}}</h6>
                    </div>
                </div>

                    <div class="col-md-6 card">
                          <table class="table">
  <thead>
    <tr>
      <th scope="col"> name</th>
      <th scope="col"> Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      
    </tr>
  </thead>
  <tbody>
        @foreach ($orders->orderItem as $item)
    <tr>  
        
        <th scope="row">{{$item->products->name}}</th>
      <td>{{$item->quantity}}</td>
      <td>&#8358;{{$item->price}}</td> 
    </tr>
    @endforeach
  </tbody>

</table>
  <div class="total">
      <h5>Total</h5>
      <span class="float-end ">&#8358;{{$orders->total_price}}</span>
  </div>
  </div>
   </div>
  </div>
@endsection