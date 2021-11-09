@extends('layouts.front')

@section('title')
   Checkout
@endsection

@section('content')
    

           


<body>

  <!-- content -->

  <div class="section-empty">
    <div class="container content">
      <div class="row">
        <div class="col-md-7">
          <p class="billing_text">Orders Details</p>
          <div class="input_form">
            <div class="row">
              <form action="{{url('place-order')}}" method="POST">
                @csrf
              <div class="col-md-6">
                <div class="input_box_cart">
                  <input type="text" name="fname" placeholder="First Name" value="{{Auth::user()->lname}}">
                </div>
              </div>

              
              <div class="col-md-6">
                <div class="input_box_cart">
                  <input type="text" name="lname" placeholder=" Last Name">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="input_box_cart">
                  <input type="email" name="email" placeholder="Email Address">
                </div>
              </div>
              <div class="col-md-6">
                <div class="input_box_cart">
                  <input type="text" name="phone" placeholder="Mobile Number">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="input_box_cart">
                  <textarea rows="4" name="address" placeholder="Full Address"></textarea>
                </div>
              </div>
            </div>
          </div>
        
          <div class="input_form">
            <div class="row">
              <div class="col-md-6">
                <div class="input_box_cart">
                  <input type="text" name="city" placeholder="Enter your city">
                </div>
              </div>
              <div class="col-md-6">
                <div class="input_box_cart">
                  <input type="text" name="state" placeholder=" Enter your state">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="input_box_cart">
                  <input type="text" name="zipcode" placeholder="Zip Code">
                </div>
              </div>
            
            </div>
          
            <div class="row">
            
            </div>
          </div>
          <button type="submit" class="total_btn_cart text_center_button">
            Place Order
          </button>
          </form>
        </div>
        <div class="col-md-5">
          <p class="billing_text">Your Cart</p>
          <div class="yourCart_div">
            <div class="cart_img_content">
              <!-- start -->
              <div class="food_img_price_des">   
                     @foreach ($product as $item)
                <div class="cart_food_img">
                  <img src="{{asset('Admin/uploads/products/'.$item->products->image)}}">
                </div>
                <div class="food_dec_flex">
                  <p> {{$item->products->name}}</p>
                  <p>Qty: {{$item->prod_yards}}</p>
                  <p>&#8358;{{$item->products->selling_price}}</p>  
                     
                </div>
           @endforeach
              </div>
             
           
              <!-- end -->
            </div>
          </div>
          <div class="cart_total">
            <div class="price_total">
              <p>Total</p>
              <p></p>
            </div>
            <div class="price_total">
              <p>Shipping</p>
              <p>free</p>
            </div>
          </div>
          <button type="button" class="total_btn_cart">
            <span>Total</span>
            <span>{}</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- end content -->

</body>


@endsection