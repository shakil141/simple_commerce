<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
      <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
      <!-- nav bar -->
      <div class="w-100 mb-4 d-flex">
        <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
            <img src="{{ asset('backend_assets/assets/images/logo.png') }}" alt="E-Shopper">
        </a>
      </div>
      <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item dropdown">
          <a href="{{ route('dashboard') }}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-home fe-16"></i>
            <span class="ml-3 item-text">Dashboard</span><span class="sr-only">(current)</span>
          </a>

        </li>
      </ul>
      <p class="text-muted nav-heading mt-4 mb-1">
        <span>Store</span>
      </p>
      <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item dropdown">
          <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-box fe-16"></i>
            <span class="ml-3 item-text">Category</span>
          </a>
          <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
            <li class="nav-item">
              <a class="nav-link pl-3" href="{{ route('categories.create') }}"><span class="ml-1 item-text">Add Categories</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="{{ route('categories.index') }}"><span class="ml-1 item-text">All Categories</span></a>
            </li>

          </ul>
        </li>
        <li class="nav-item dropdown">
          <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-credit-card fe-16"></i>
            <span class="ml-3 item-text">Brands</span>
          </a>
          <ul class="collapse list-unstyled pl-4 w-100" id="forms">
            <li class="nav-item">
              <a class="nav-link pl-3" href="{{ route('menufacture.create') }}"><span class="ml-1 item-text">Add Brand</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="{{ route('menufacture.index') }}"><span class="ml-1 item-text">All Brand</span></a>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-grid fe-16"></i>
            <span class="ml-3 item-text">Products</span>
          </a>
          <ul class="collapse list-unstyled pl-4 w-100" id="tables">
            <li class="nav-item">
              <a class="nav-link pl-3" href="{{ route('products.create') }}"><span class="ml-1 item-text">Add Product</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="{{ route('products.index') }}"><span class="ml-1 item-text">All Products</span></a>
            </li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a href="#sliders" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-grid fe-16"></i>
            <span class="ml-3 item-text">Slider</span>
          </a>
          <ul class="collapse list-unstyled pl-4 w-100" id="sliders">
            <li class="nav-item">
              <a class="nav-link pl-3" href="{{ route('sliders.create') }}"><span class="ml-1 item-text">Add Slider</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="{{ route('sliders.index') }}"><span class="ml-1 item-text">All Slider</span></a>
            </li>
          </ul>
        </li>
        <li class="nav-item w-100">
            <a class="nav-link" href="widgets.html">
              <i class="fe fe-layers fe-16"></i>
              <span class="ml-3 item-text">Social Link</span>
            </a>
        </li>

        <li class="nav-item w-100">
            <a class="nav-link" href="widgets.html">
              <i class="fe fe-layers fe-16"></i>
              <span class="ml-3 item-text">Shop Name</span>
            </a>
        </li>

        <li class="nav-item w-100">
            <a class="nav-link" href="widgets.html">
              <i class="fe fe-layers fe-16"></i>
              <span class="ml-3 item-text">Delivary Name</span>
            </a>
        </li>
      </ul>

    </nav>
  </aside>
