	@extends('layouts.front')

@section('title')
    FABRI8 | Categories
@endsection

@section('content')
    
    <div class="container ">
		<h1 class="text-center ">Feature Products</h1>
	

	<div class=" fabric_item  row">	
        @foreach ($data as $prod)
         <a href="{{url('category/'.$categories[0]->slug.'/'.$prod->slug)}}">           
	<div class="card my_image card-image" style="max-width: 20rem" style="width: 100%">
 <img src="{{asset('Admin/uploads/products/'.$prod->image)}}" class="card-img-top " alt="..." style="height: 10width">
				<div class="card-body fabric_text">
				<h5 class=" ps-shoe__name"><h2>{{$prod->name}}</h2></h5>
				<p class="card-text"><p>{{$prod->small_descript}}</p></p>
				</div>
				</div>
		 </a>
			@endforeach
			
	</div>

	
	

@endsection