@extends('layouts.admin');

@section('content')
    <div class="card">
        <div class="card-header">
               <h1>Add Category</h1>
        </div>
            <div class="card-body">
             <form  action={{ url('insert-category') }} method="POST" enctype="multipart/form-data">
                    @csrf
              
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
                 <label for="">Description</label>
                 <textarea class='form-control' name="description"></textarea>
                </div>
                 <div class="col-md-6  mb-4  ">
                 
                 <label for="">Status</label>
                 <input  type="checkbox" name='status'>
            </div>

               <label for="">Popular</label>
                 <input  type="checkbox" name='popular'>
            </div>


                <div class="col-md-6  mb-4  "> 
            <label for="">Image</label>
                 <input type="file" name="image">
            </div>
            <input type="color">
                
                <div class="col-md-6  mb-4  ">
                 <button type="submit" class="btn btn-primary">Post</button>
                
                </div>

                </div>
             </form>
            </div>
    </div>
@endsection