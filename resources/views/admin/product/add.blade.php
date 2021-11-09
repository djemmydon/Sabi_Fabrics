@extends('layouts.admin');

@section('content')
    <div class="card">
        <div class="card-header">
               <h1>Add Product</h1>
        </div>
            <div class="card-body">
             <form  action={{ url('insert-products') }} method="POST" enctype="multipart/form-data">
                    @csrf
              
                    <div class="col-md-6  mb-4  ">

                <select class="form-select" name="subcate_id" aria-label="Default select example">
                <option selected>Select Category</option>

                    @foreach ($subcate as $item)
                    
                     <option value={{$item->id}}>{{$item->name}}</option>

                @endforeach
                </select>

                    </div>

                <div class="row">
                   <div class="col-md-6  mb-4  ">
                 <label for="">Name</label>
                 <input class='form-control' type="text" name='name'>
                
                </div> 

                    <div class="row">
                   <div class="col-md-6  mb-4  ">
                 <label for="">Slug</label>
                 <input class='form-control' type="text" name='slug'>
                
                </div> 



             
                
                <div class="col-md-6  mb-4  ">    
                 <label for="">Price Now</label>
                 <input class='form-control' type="text" name='selling_price'>
                </div>   

                <div class="col-md-6  mb-4  ">  
                 <label for="">Price Before</label>
                 <input class='form-control' type="text" name='original_price'>
                </div>  

                 <div class="col-md-6  mb-4  ">
                 <label for="">Small Description</label>
                 <textarea class='form-control' name="small_descript"></textarea>
                </div>

                 <div class="col-md-6  mb-4  ">
                 <label for="">Description</label>
                 <textarea class='form-control' name="descript"></textarea>
                </div>
                 <div class="col-md-6  mb-4  ">
                 
                 <label for="">Status</label>
                 <input class='' type="checkbox" name='status'>
            </div>
                 <div class="col-md-6  mb-4  ">
                 
                 <label for="">Trending</label>
                 <input  type="checkbox" name='trendings'>
            </div>

                <div class="col-md-6  mb-4  "> 
            <label for="">Image</label>
                 <input type="file" name="image">
            </div>

            
                <div class="col-md-6  mb-4  "> 
            <label for="">Products Image</label>
                 <input type="file" name="Prod_image" multiple>
            </div>
    
    
                
                <div class="col-md-6  mb-4  ">
                 <button type="submit" class="btn btn-primary">Post</button>
                
                </div>

                </div>
             </form>
            </div>
    </div>



@endsection