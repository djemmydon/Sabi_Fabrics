@extends('layouts.admin');

@section('content')
    <div class="card">
        <div class="card-header">
               <h4>Edit/Updates Category</h4>
        </div>
            <div class="card-body">
             <form  action={{ url('update-category/'.$category->id) }} method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
              
                <div class="row">

                   

                    </div>

                   <div class="col-md-6  mb-4  ">
                 <label for="">Name</label>
                 <input class='form-control' type="text"  name='name' value={{$category->name}}>
                
                </div> 

                     <div class="col-md-6  mb-4  ">    
                 <label for="">Slug</label>
                 <input class='form-control' type="text"  name='slug' value={{$category->slug}} >
                </div> 


                     <div class="col-md-6  mb-4  ">    
                 <label for="">Price Now</label>
                 <input class='form-control'  type="text" name='prize_now' value={{$category->prize_now}}  >
                </div>   

                  

                <div class="col-md-6  mb-4  ">  
                 <label for="">Price Before</label>
                 <input class='form-control' type="text" value={{$category->prize_before}}  name='prize_before'>
                </div>  

                 <div class="col-md-6  mb-4  ">
                 <label for="">Description</label>
                 <textarea class='form-control'  name="description"> {{$category->description}}</textarea>
                </div>
                 <div class="col-md-6  mb-4  ">
                 
                 <label for="">Status</label>
                 <input class=''  {{$category->status == '1' ? 'checked':''}}   type="checkbox" name='status'>
            </div>   
                 <label for="">Popular</label>
                 <input class=''  {{$category->popular == '1' ? 'checked':''}}   type="checkbox" name='popular'>
            </div>

                <div class="col-md-6  mb-4  "> 
            <label for="">Image</label>
            @if ($category->image)
                <img style="width: 50" src="{{asset('Admin/uploads/categories/'.$category->image)}}" alt="">
            @endif
                 <input type="file" name="image" >
            </div>
                
                <div class="col-md-6  mb-4  ">
                 <button type="submit" class="btn btn-primary">Post</button>
                
                </div>

                </div>
             </form>
            </div>
    </div>
@endsection