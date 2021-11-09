@extends('layouts.front')

@section('title')
    FABRI8 | Categories
@endsection

@section('content')


<div class="container align-item-center  product_data">
    	<div class="box-title mb-3">
			
		</div>
    <div class="row">
            <h1></h1>
        <div class="col-md-12">
            <div class="row">
@foreach ($subcate as $prod)
                        <div class="col-md-3">
         
            <div class="card mb-3">
                  <a href="{{ url('view-category/'.$categories->cate_slug.'/'.$prod->subcate_cate)}}">
                    /view-category/{cate_slug}/{subcate_cate}
            <img src="{{asset('Admin/uploads/categories/'.$prod->image)}}" class="card-img-top" alt="..." style="height: 10rem">
             
            <div class="card-body">
				<h5 class="card-title"><h2>{{$prod->name}}</h2></h5>
				<p class="card-text"><p>{{$prod->small_descript}}</p>
				</div>
                </a>
            </div>
        </div>
  
  @endforeach
            </div>
        </div>

    </div>
</div>




 @endsection 


 




 