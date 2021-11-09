@extends('layouts.admin');

@section('content')

{{-- @foreach ($products as $item) --}}
    
{{-- <div class="container-fluid ">
    <div class="container-fluid d-flex">

  
   <div class="card" style="width:30%; max-height:">
 <img src={{ asset('Admin/uploads/products/'.$item->image)}}  class="card-img-top" alt="..."  >
  <div class="card-body">
      <h5 class="card-title">{{$item->name}}</h5>
    <h5 class="card-title">{{$item->selling_price}}  per yard</h5> 
    <span>{{$item->original_price}}</span>
      <p class="card-text">{{$item->descript}} </p>
    <div>

      
          <a href="{{url('edit-prod/'.$item->id)}}" hidde class="btn btn-primary">Edit</a>
      <a href="{{url('delete-prod/'.$item->id)}}" class="btn btn-danger">Delete</a>
    </div> 
  </div>
</div>
@endforeach
</div>
  </div> --}}


      <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Sub Category</th>
      <th scope="col">Name</th>
      <th scope="col">image</th>
      <th scope="col">Slug</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
        @foreach ($products as $item)
    <tr>
  
      <th scope="row">{{$item->id}}</th>
      <th scope="row">{{$item->subcate_id}}</th>
      <td>{{$item->name}}</td>
      <td><img src={{ asset('Admin/uploads/products/'.$item->image)}}  style='width: 60px' alt="..."  ></td>
     
      <td>{{$item->slug}}</td>
      <td>

        <a href="{{url('edit-prod/'.$item->id)}}" hidde class="btn btn-primary">Edit</a>
      <a href="{{url('delete-prod/'.$item->id)}}" class="btn btn-danger">Delete</a>
      </td> 

      <td><img src={{ asset('Admin/uploads/products/'.$item->prod_image)}}  style='width: 60px' alt="..."  ></td>
    </tr>
  @endforeach
    
  </tbody>
</table>


    @endsection
                
          


    