@extends('layouts.admin');

@section('content')



    
   <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Category_Id</th>
      <th scope="col">Name</th>
      <th scope="col">image</th>
      <th scope="col">Category</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
        @foreach ($sub_category as $item)
    <tr>
  
      <th scope="row">{{$item->id}}</th>
      <th scope="row">{{$item->category_id}}</th>
      <td>{{$item->name}}</td>
      <td><img src={{ asset('Admin/uploads/categories/'.$item->image)}}  style='width: 60px' alt="..."  ></td>
      {{-- <td>{{$item->categori->name}}</td> --}}
      <td>

        <a href="{{url('dashboard/edit-sub-category/'.$item->id)}}" hidde class="btn btn-primary">Edit</a>
      <a href="{{url('dashboard/delete-sub-category/'.$item->id)}}" class="btn btn-danger">Delete</a>
    </tr>

      </td>
  @endforeach
    
  </tbody>
</table>
  @endsection
                
          