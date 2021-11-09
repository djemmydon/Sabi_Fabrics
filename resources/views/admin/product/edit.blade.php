@extends('layouts.admin');

@section('content')
    <div class="card">
        <div class="card-header">
               <h4>Edit/Updates product</h4>
        </div>
            <div class="card-body">
             <form  action={{ url('update-product/'.$products->id) }} method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                <div class="row">

      <div class="col-md-6  mb-4  ">
                <select class="form-select" name="subcate_id" >
                    @foreach ($subcate as $item)
                        
                                <option>{{$products->subCategory->name}}</option>
                    @endforeach
                </select>

                    </div>

             

                   <div class="col-md-6  mb-4  ">
                 <label for="">Name</label>
                 <input type="text" name='name' class='form-control' value={{$products->name}}  >
                
                </div> 

                     <div class="col-md-6  mb-4  ">
                 <label for="">Slug</label>
                 <input type="text" name='slug' class='form-control' value={{$products->slug}}  >
                
                </div> 

                <div class="col-md-6  mb-4  ">    
                 <label for="">Price Now</label>
                 <input class='form-control' type="text" name='selling_price' value="{{$products->selling_price}}">
                </div>   

                <div class="col-md-6  mb-4  ">  
                 <label for="">Price Before</label>
                 <input class='form-control' type="text" name='original_price' value="{{$products->original_price}}">
                </div>  
                 

                 <div class="col-md-6  mb-4  ">
                 <label for="">Small Description</label>
                 <textarea class='form-control'  name="small_descript"> {{$products->small_descript}}</textarea>
                </div>

                 <div class="col-md-6  mb-4  ">
                 <label for="">Description</label>
                 <textarea class='form-control'  name="descript"> {{$products->descript}}</textarea>
                </div>
                 <div class="col-md-6  mb-4  ">
                 
                 <label for="">Status</label>
                 <input class=''  {{$products->status == '1' ? 'checked':''}}   type="checkbox" name='status'>
            </div>
                 <div class="col-md-6  mb-4  ">
                 
                 <label for="">Trending</label>
                 <input class=''  {{$products->trendings == '1' ? 'checked':''}}   type="checkbox" name='trendings'>
            </div>

                <div class="col-md-6  mb-4  "> 
            <label for="">Image</label>
            @if ($products->image)
                <img style="width: 50" src="{{asset('Admin/uploads/products/'.$products->image)}}" alt="">
            @endif
                 <input type="file" name="image" >
            </div>

                <div class="col-md-6  mb-4  "> 
            <label for="">Gallery Image</label>
            @if ($products->prod_image)
                <img style="width: 50" src="{{asset('Admin/uploads/products/'.$products->image)}}" alt="">
            @endif
                 <input type="file" name="prod_image" multiple>
            </div>
                
                <div class="col-md-6  mb-4  ">
                 <button type="submit" class="btn btn-primary">Post</button>
                
                </div>

                </div>
             </form>
            </div>
    </div>
@endsection