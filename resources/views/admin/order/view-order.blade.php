@extends('layouts.admin');

@section('content')

<div class="card">
    <div class="card-body">
 
 <div class="row">
               
                    <div class="col-md-8   card m-3">
                    <label>First Name</label>
                    <div class="border-bottom p-6">
                        <h6>{{$orders->fname}}</h6>
                    </div>
                    <label>Last Name</label>
                    <div class="border-bottom p-6">
                        <h6>{{$orders->lname}}</h6>
                    </div>
                    <label>Email </label>
                    <div class="border-bottom p-6">
                        <h6>{{$orders->Email}}</h6>
                    </div>
                    <label>Phone Number</label>
                    <div class="border-bottom p-6">
                        <h6>{{$orders->phone}}</h6>
                    </div>
                    <label>Adderess</label>
                    <div class="border-bottom p-6">
                        <h6>{{$orders->address}}</h6>
                    </div>
                    <label>City</label>
                    <div class="border-bottom p-6">
                        <h6>{{$orders->city}}</h6>
                    </div>
                    <label>State</label>
                    <div class="border-bottom p-6">
                        <h6>{{$orders->state}}</h6>
                    </div>
                    <label>Zipcode</label>
                    <div class="border-bottom p-6">
                        <h6>{{$orders->zipcode}}</h6>
                    </div>
                    <label>Zipcode</label>
                    <div class="border-bottom p-6">
                        <h6>{{$orders->zipcode}}</h6>
                    </div>
                </div>

                    <div class="col-md-3 card">
                          <table class="table">
  <thead>
    <tr>
      <th scope="col"> name</th>
      <th scope="col"> Quantity</th>
      <th scope="col">Price</th>
     
      
    </tr>
  </thead>
  <tbody>
        @foreach ($orders->orderItem as $item)
    <tr>  
        
        <th scope="row">{{$item->products->name}}</th>
      <td>{{$item->quantity}}</td>
      <td>&#8358;{{$item->price}}</td> 
    </tr>
    @endforeach
  </tbody>

</table>
  <div class="total">
      <h5>Total
         <span class="float-right ">&#8358;{{$orders->total_price}}</span>
      </h5>
      <hr>
     
  </div>
      <form action="{{url('update-order/'.$orders->id)}}" method="POST">
        @csrf
        @method('PUT')
    <label for="exampleFormControlSelect1">Status</label>
    <select class="form-control " name="order-status" data-style="btn btn-link" id="exampleFormControlSelect1">
      <option {{$orders->status == '0' ? 'selected' : ' '}} value='0'>Pending</option>
      <option  {{$orders->status == '1' ? 'selected' : ' '}} value='1'>Completed</option>
    </select>
    <button type="submit" class="btn btn-success" >Update</button>
    </form>
  </div>
  
   </div>
     <div class="form-group">
   
  </div>


    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Profile</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Company (disabled)</label>
                          <input type="text" class="form-control" disabled>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" class="form-control" >
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <input type="email" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Fist Name</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Adress</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">City</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Country</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Postal Code</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>About Me</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"> Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</label>
                            <textarea class="form-control" rows="5"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="javascript:;">
                    <img class="img" src="../assets/img/faces/marc.jpg" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                  <h4 class="card-title">Alec Thompson</h4>
                  <p class="card-description">
                    Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                  </p>
                  <a href="javascript:;" class="btn btn-primary btn-round">Follow</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        @endsection






 