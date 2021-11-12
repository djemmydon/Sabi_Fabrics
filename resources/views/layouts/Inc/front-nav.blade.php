{{-- 
      

    

       <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
    <a class="navbar-brand nav-logo text-center" href="#">FABRIC8</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse " id="navbarNav">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="{{url('category')}}">Category</a>
        </li>
        
   
             <li class="nav-item">
          <a class="nav-link " aria-current="page" href="{{url('dashboard')}}">Dashboard</a>
        </li>
        
       
                                 @guest
                            @if (Route::has('login'))
                                <li class="nav-item d-flex flex-end">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                                     <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li>
                                            <a class="dropdown-item" href="#">
                                            My profile
                                        </a>
                                    </li>

                                         <li>
                                            <a class="dropdown-item" href="{{url('my-order')}}">
                                          My Order
                                        </a>
                                    </li>
                                      <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();   document.getElementById('logout-form').submit();">
                                            Log out
                                        </a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                         </form>
                        </li>
                        </ul>
                         </li>
                        @endguest

        </div>
      </ul>

    </div>
  </div>
</nav> --}}

  
{{-- 

<nav class="  pt-3 ">
  <div class="container-fluid d-flex align2 ">
    <a class=" brand-logo"><img src="img/ddd.jpg" alt="" style="width:5em"></a>
    <div class="2nd-nav d-flex">
        <form class="d-flex form1">
      <input class="form-control search-box" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success search-button" type="submit">Search</button>
    </form>
     <ul class="navbar-nav d-flex flex-end ">
      <li class="dropdown ">
        <i class="fas fa-cart-arrow-down m-1 carts"></i>
        <i class="fas fa-cart-arrow-down m-1 carts"></i>
        <i class="fas fa-cart-arrow-down m-1 carts"></i>
 
      </li>

       
                            
                        </ul>
    </div>
  
    
  </div>
</nav> --}}

<div class="header mb-3" id="header">
 
     <a href="" ><h1 class="logo1">Logo</h1></a>



  <div class="left">
    <div class="search-container">
      <label for="search" class="fas fa-search"></label>
      <input type="search"   name="" id="search">
    </div>
    <div class="fas fa-shopping-cart p-1"></div><span class="cart-count">52</span>
    <div class="fas fa-user"></div>

  </div>

  <div class="navbar2">

    <ul>
  

            @guest
                            @if (Route::has('login'))
                                <li>
                                    <a  href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li >
                                    <a  href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                                  
                                  
                                        <li>
                                            <a  href="#">
                                            My profile
                                        </a>
                                    </li>

                                         <li>
                                            <a  href="{{url('my-order')}}">
                                          My Order
                                        </a>
                                    </li>
                                      <li>
                                            <a  href="{{ route('logout') }}" onclick="event.preventDefault();   document.getElementById('logout-form').submit();">
                                            Log out
                                        </a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                         </form>
                        </li>
                      
                        @endguest
                        
    </ul>
  </div>
</div>


