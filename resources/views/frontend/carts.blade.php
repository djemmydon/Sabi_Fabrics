@extends('layouts.front')

@section('title')
    Carts
@endsection

@section('content')
<div class="container py-5 cart-data">
  @if ($cartsItem->count() > 0)
      
  
         @php   $total = 0; @endphp

   <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">image</th>
      <th scope="col">Price</th>
      <th scope="col">Yards/yQuantity</th>
    </tr>
  </thead>
  <tbody>
        @foreach ($cartsItem as $item)
    <tr>
  
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->products->name}}</td>
      <td><img src={{asset('Admin/uploads/products/'.$item->products->image)}}  style='width: 60px' alt="..."  ></td>
      <td>{{$item->products->selling_price}}</td>
      <td>

         <div class="input-group text-center mb-3">
                           <input type="hidden" value="{{$item->prod_id}}" class="prod_id">

                            <span class="input-group-text">Yards</span>
                            <input name="prod_yards" type="text" value={{$item->prod_yards}} class="form-control prod_yards change_yards">
                        </div>
      </td>
      <td><button class="btn btn-danger remove_cart">Remove</button></td>
    </tr>

      </td>
   
  
        @php
     $total += $item->products->selling_price * $item->prod_yards 
  @endphp
        @endforeach
   <a class="btn btn-primary float-end" href="{{url('checkout')}}">Checkout</a>
          
      
  </tbody>

</table> 

        
 <div class="card-footer">
            <h2>Total ={{ $total }}</h2>
        </div>
        </div>
     
            
        @else
            <div class="card-body card">
              <h1 class="text-center m-5"><i class="fas fa-shopping-cart"></i>Cart Is Empty</h1>
              <div class="card-body">
              <a class="btn btn-primary float-end" href="{{url('category')}}">Continue Shopping</a>

              </div>
            </div>
    
        @endif
</div>

@endsection



@section('scripts')
    <script>
      $(document).ready(function () {

  

    $('.remove_cart').click(function (e) {
        e.preventDefault();
       
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
         var prod_id = $(this).closest('.cart-data').find('.prod_id').val();
        $.ajax({
            method: 'POST',
            url: "remove_from_cart",
            data: {
                'prod_id': prod_id,
               
            },
            success: function (response) {
              window.location.reload();
                swal(' ' ,response.status, 'success')
            }

        });

      });

          $('.change_yards').change(function (e) {
        e.preventDefault();
       
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
         var prod_id = $(this).closest('.cart-data').find('.prod_id').val();
         var prod_yards = $(this).closest('.cart-data').find('.prod_yards').val();
        $.ajax({
            method: 'POST',
            url: "update_cate",
            data: {
                'prod_id': prod_id,
                'prod_yards': prod_yards,
               
            },
            success: function (response) {
              window.location.reload();
                swal(' ' ,response.status, 'success')
            }

        });

      });

});

    </script>
@endsection