@extends('layouts.admin');

@section('content')
    <div class="card">
        <div class="card-header">
               <h4>Edit/Updates Category</h4>
        </div>
            <div class="card-body">
             <form  action={{ url('dashboard/sub-category/update-sub-category/'.$sub_category->id) }} method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')


              
                <div class="row">


                     <div class="col-md-6  mb-4  ">
               <select class="form-select form-select-lg mb-3 " name="category_id" aria-label=".form-select-lg example">
                   
                         <option selected >{{$sub_category->categori->name}}</option>
             

</select>
                
                </div> 
                   <div class="col-md-6  mb-4  ">
                 <label for="">Name</label>
                 <input class='form-control' type="text"  name='name' value={{$sub_category->name}}>
                
                </div> 

                     <div class="col-md-6  mb-4  ">    
                 <label for="">Slug</label>
                 <input class='form-control' type="text"  name='slug' value={{$sub_category->slug}} >
                </div> 

                 <div class="col-md-6  mb-4  ">
                 <label for="">Description</label>
                 <textarea class='form-control'  name="description"> {{$sub_category->description}}</textarea>
                </div>
                 <div class="col-md-6  mb-4  ">
                 
                 <label for="">Status</label>
                 <input class=''  {{$sub_category->status == '1' ? 'checked':''}}   type="checkbox" name='status'>
            </div>   
                 <label for="">Popular</label>
                 <input class=''  {{$sub_category->popular == '1' ? 'checked':''}}   type="checkbox" name='popular'>
            </div>

                <div class="col-md-6  mb-4  "> 
            <label for="">Image</label>
            @if ($sub_category->image)
                <img style="width: 50" src="{{asset('Admin/uploads/categories/'.$sub_category->image)}}" alt="">
            @endif
                 <input type="file" name="image" >
            </div>
                
                <div class="col-md-6  mb-4  ">
                 <button type="submit" class="btn btn-primary">Update</button>
                
                </div>

                </div>
             </form>
            </div>
    </div>
@endsection