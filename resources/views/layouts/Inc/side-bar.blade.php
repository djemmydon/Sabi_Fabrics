  <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
    Sabi Fabrics    
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item {{Request::is('dashboard') ? 'active': ' ' }}  ">
            <a class="nav-link" href={{url('dashboard')}}>
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item {{Request::is('dashboard/categories') ? 'active': ' ' }} ">
            <a class="nav-link " href={{ url('dashboard/categories')}}>
              <i class="material-icons">person</i>
              <p>Category</p>
            </a>
          </li>

           <li class="nav-item {{Request::is('dashboard/sub-category') ? 'active': ' ' }} ">
            <a class="nav-link " href={{ url('dashboard/sub-category')}}>
              <i class="material-icons">person</i>
              <p>Sub-Category</p>
            </a>
          </li>

            <li class="nav-item {{Request::is('add-categories') ? 'active': ' ' }} ">
            <a class="nav-link" href={{ url('add-categories')}}>
              <i class="material-icons">add</i>
              <p>Add Category</p>
            </a>
          </li>

            <li class="nav-item {{Request::is('dashboard/sub-category/add-sub-category') ? 'active': ' ' }} ">
            <a class="nav-link" href={{ url('dashboard/sub-category/add-sub-category')}}>
              <i class="material-icons">add</i>
              <p>Add Sub-Category</p>
            </a>
          </li>

                    <li class="nav-item {{Request::is('products') ? 'active': ' ' }} ">
            <a class="nav-link " href={{ url('products')}}>
              <i class="material-icons"></i>
              <p>Products</p>
            </a>
          </li>

            <li class="nav-item {{Request::is('add-products') ? 'active': ' ' }} ">
            <a class="nav-link" href={{ url('add-products')}}>
              <i class="material-icons">add</i>
              <p>Add Products</p>
            </a>
          </li>

            <li class="nav-item {{Request::is('dashboard/order') ? 'active': ' ' }} ">
            <a class="nav-link" href={{ url('dashboard/order')}}>
              <i class="material-icons">add</i>
              <p>Order</p>
            </a>
          </li>

            <li class="nav-item {{Request::is('dashboard/total-user') ? 'active': ' ' }} ">
            <a class="nav-link" href={{ url('dashboard/total-user')}}>
              <i class="material-icons">add</i>
              <p>Users</p>
            </a>
          </li>

          

        </ul>
      </div>
    </div>