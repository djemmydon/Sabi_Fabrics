@extends('layouts.front')

@section('title')
    FABRI8 | Categories
@endsection

@section('content')


<div class="container align-item-center">
    <div class="row">

        <div class="col-md-12">
            <div class="row">
@foreach ($categories as $cate)
                        <div class="col-md-3">
              <a href="{{url('view-category/'.$cate->slug)}}">
            <div class="card mb-3">
            <img src="{{asset('Admin/uploads/categories/'.$cate->image)}}" class="card-img-top" alt="..." style="height: 10width">
            <div class="card-body">
				<h5 class="card-title"><h2>{{$cate->name}}</h2></h5>
				<p class="card-text"><p>{{$cate->description}}</p></p>
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


 




 