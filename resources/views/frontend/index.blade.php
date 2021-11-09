@extends('layouts.front')

@section('title')
    FABRI8 | Welcome
@endsection

@section('content')
@include('layouts.inc.carousel')
@include('layouts.inc.body')

<div class="feature-category">

	<div class="container">
			<div class="box-title">
			<h4>Categories</h4>
		</div>
	<div class="row">		
		@foreach ($allpro as $item)
		
		<div class="col-md-6">
	<a href="{{url('view-category/'.$item->slug)}}">
			<img src="{{asset ('Admin/uploads/categories/'.$item->image)}}" alt="">
			<h2>{{$item->slug}}</h2>
		</a>
		</div>
	
			@endforeach
	</div>
</div>
</div>

{{-- On sale --}}

<div class=" container py-1 d-flex align-items-start">
	<div class="container ">
			<div class="box-title mb-3">
			<h4>Trending Products</h4>
		</div>
		<div class="row ">
	<div class="owl-carousel owl-theme featured-carousel">
	@foreach ($feature_product as $prod)
	<div class="cards  item">
         <a href="{{url('view-category/'.$subcategories[0]->slug.'/'.$prod->slug)}}">           
	<div class="card my_image card-image" style="max-width: 20rem" style="width: 100%">
 <img src="{{asset('Admin/uploads/products/'.$prod->image)}}">
				<div class="content-1">
			<h5>{{$prod->name}}</h5>
			<p>&#8358;{{$prod->selling_price}}.00	<span>&#8358;{{$prod->original_price}}.00</span></p>
			
				
				</div>
				</div>
		 </a>
			</div>
					@endforeach
			
	</div>

		</div>
	</div>		
</div>




<div class=" container py-1 d-flex align-items-start">
	<div class="container ">
			<div class="box-title mb-3">
			<h4>Trending Products</h4>
		</div>
		<div class="row ">
	<div class="owl-carousel owl-theme featured-carousel">
@foreach ($trendings as $trend)
	<div class=" fabric_item  item">
        <a href="{{url('category/'.$allpro[0]->slug.'/'.$trend->slug)}}">         
	<div class="ui large " style="max-width: 20rem" style="width: 100%">
 <img src="{{asset('Admin/uploads/categories/'.$trend->image)}}">
				<div class="card-body product-text">
			<h5>{{$trend->name}}</h5>
				</div>
				</div>
		 </a>
			</div>
					@endforeach
			
	</div>

		</div>
	</div>		
</div>
 @endsection 


 


@section('scripts')


<script>

		$('.featured-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
	dots:false,
	autoplay:true,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
</script>

@endsection

 