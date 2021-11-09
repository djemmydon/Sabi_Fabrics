@extends('layouts.front')

@section('title', $prod->name)
    


@section('content')

<div class="container product_data">
    <div class="rows">
        <div class=" col-image">
                <img src="{{asset('Admin/uploads/products/'.$prod->image)}}" alt="">
        </div>

        <div class="">

            <div class="prod-details">
                    <h2>{{$prod->name}}</h2>
                    @if ($prod->trendings == '1') 
                        <label  class="float-end">Trendings</label>
                    @endif
                    
                     
                    <div class="price">
                        <h4>{{$prod->selling_price}} <span>{{$prod->original_price}}</span></h4>
                    </div>

                    <div class="descrip">
                        <p>{{$prod->descript}}</p>
                    </div>

                    <div class="col-md-3">
                           <input type="hidden" value="{{$prod->id}}" class="prod_id">
                        <label for="quantity">Yards</label>
                        <div class="input-group text-center mb-3">
                            <span class="input-group-text">-</span>
                            <input name="prod_yards" type="text" value='1' class="form-control prod_yards">
                        </div>
                    </div>

                    <button class="add_cart btn btn-success btn-small">Add to Cart</button>
                    <button class="add_wishlist btn btn-success btn-danger">Add to Wishlist</button>
            </div>
            
        </div>
    </div>
</div>

@endsection




@section('scripts')
    <script>
      $(document).ready(function () {

    $('.add_cart').click(function (e) {
        e.preventDefault();

        var product_id = $(this).closest('.product_data').find('.prod_id').val();
        var product_yards = $(this).closest('.product_data').find('.prod_yards').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $.ajax({
            method: 'POST',
            url: "/add-to-cart",
            data: {
                'product_id': product_id,
                'product_yards': product_yards,
            },
            success: function (response) {
                swal(response.status);
            }

        });
    });

   
    })
});

    </script>
@endsection