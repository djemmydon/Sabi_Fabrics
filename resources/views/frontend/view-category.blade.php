@extends('layouts.front')

@section('title')
    FABRI8 | Categories
@endsection

@section('content')


<div class="container align-item-center  product_data">
    <div class="row">
            <h1>{{$categories->name}}</h1>
        <div class="col-md-12">
            <div class="row">
@foreach ($subcate as $prod)
                        <div class="col-md-3">
         
            <div class="card mb-3">
                  <a href="{{url('category/'.$categories->slug.'/'.$prod->slug)}}">
            <img src="{{asset('Admin/uploads/categories/'.$prod->image)}}" class="card-img-top" alt="..." style="height: 10width">
              </a>
            <div class="card-body">
				<h5 class="card-title"><h2>{{$prod->name}}</h2></h5>
				<p class="card-text"><p>{{$prod->small_descript}}</p>
				</div>
               
            </div>
           
             
        </div>
  
  @endforeach
            </div>
        </div>

    </div>
</div>




 @endsection 


 




 