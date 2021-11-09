@extends('layouts.front')

@section('title')
    FABRI8 | Categories
@endsection

@section('content')
<div class="container-fluid">
   <div class="box-title m-5">
			<h4>{{$subcategories->name}}</h4>
		</div>



<div class="card-all">
   @foreach ($prod as $item)
<div class="cards-body">
  <div class="cards">
 <a href="{{url('view-category/'.$subcategories->slug.'/'.$item->slug)}}">
 
<div class="img">
   <img src="{{asset('Admin/uploads/products/'.$item->image)}}" alt="">

</div>
  <div class="content-1 placeholder-glow">
  <h5>{{$item->name}}</h5>
       <p>&#8358;{{$item->selling_price}}.00	<span>&#8358;{{$item->original_price}}.00</span></p>
      
</div>
</a>
</div>
</div>
 @endforeach

 </div>
</div>
 @endsection 


 




 