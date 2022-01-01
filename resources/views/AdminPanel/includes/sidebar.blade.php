<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{asset('admin')}}/index3.html" class="brand-link">
      <img src="{{asset('admin')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('admin')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
            <li class="nav-item has-treeview
{{--                {{'category' == request()->path() ? ' menu-open' : ''}}--}}
{{--            {{'category/add' == request()->path() ? ' menu-open' : ''}}--}}
{{--            {{'category/edit/{id}' == request()->path() ? ' menu-open' : ''}}--}}
{{--            {{'subcategory' == request()->path() ? ' menu-open' : ''}}--}}
{{--            {{'subcategory/add' == request()->path() ? ' menu-open' : ''}}--}}
{{--            {{'subcategory/edit/{id}' == request()->path() ? ' menu-open' : ''}}--}}
                ">
                <a href="#" class="nav-link
{{--{{'category' == request()->path() ? ' active' : ''}}--}}
{{--                {{'category/add' == request()->path() ? ' active' : ''}}--}}
{{--                {{'category/edit/{id}' == request()->path() ? ' active' : ''}}--}}
{{--                {{'subcategory' == request()->path() ? ' active' : ''}}--}}
{{--                {{'subcategory/add' == request()->path() ? ' active' : ''}}--}}
{{--                {{'subcategory/edit/{id}' == request()->path() ? ' active' : ''}}" --}}
                    ">
                    <i class="fas fa-shopping-bag"> </i>
                    <p>
                        Category
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{url('admins/category_list')}}" class="nav-link ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Category List</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Category</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Sub Category</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Child Category</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview
{{--                {{'category' == request()->path() ? ' menu-open' : ''}}--}}
            {{--            {{'category/add' == request()->path() ? ' menu-open' : ''}}--}}
            {{--            {{'category/edit/{id}' == request()->path() ? ' menu-open' : ''}}--}}
            {{--            {{'subcategory' == request()->path() ? ' menu-open' : ''}}--}}
            {{--            {{'subcategory/add' == request()->path() ? ' menu-open' : ''}}--}}
            {{--            {{'subcategory/edit/{id}' == request()->path() ? ' menu-open' : ''}}--}}
                ">
                <a href="#" class="nav-link
{{--{{'category' == request()->path() ? ' active' : ''}}--}}
                {{--                {{'category/add' == request()->path() ? ' active' : ''}}--}}
                {{--                {{'category/edit/{id}' == request()->path() ? ' active' : ''}}--}}
                {{--                {{'subcategory' == request()->path() ? ' active' : ''}}--}}
                {{--                {{'subcategory/add' == request()->path() ? ' active' : ''}}--}}
                {{--                {{'subcategory/edit/{id}' == request()->path() ? ' active' : ''}}" --}}
                    ">
                    <i class="fas fa-shopping-bag"> </i>
                    <p>
                        Banner
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('banner.index')}}" class="nav-link ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Banner List</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('banner.create')}}" class="nav-link ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Banner</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview
{{--                {{'category' == request()->path() ? ' menu-open' : ''}}--}}
            {{--            {{'category/add' == request()->path() ? ' menu-open' : ''}}--}}
            {{--            {{'category/edit/{id}' == request()->path() ? ' menu-open' : ''}}--}}
            {{--            {{'subcategory' == request()->path() ? ' menu-open' : ''}}--}}
            {{--            {{'subcategory/add' == request()->path() ? ' menu-open' : ''}}--}}
            {{--            {{'subcategory/edit/{id}' == request()->path() ? ' menu-open' : ''}}--}}
                ">
                <a href="#" class="nav-link
{{--{{'category' == request()->path() ? ' active' : ''}}--}}
                {{--                {{'category/add' == request()->path() ? ' active' : ''}}--}}
                {{--                {{'category/edit/{id}' == request()->path() ? ' active' : ''}}--}}
                {{--                {{'subcategory' == request()->path() ? ' active' : ''}}--}}
                {{--                {{'subcategory/add' == request()->path() ? ' active' : ''}}--}}
                {{--                {{'subcategory/edit/{id}' == request()->path() ? ' active' : ''}}" --}}
                    ">
                    <i class="fas fa-shopping-bag"> </i>
                    <p>
                        Product
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="" class="nav-link ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Product List</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Product</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Order Mangement
                        <i class="fas fa-angle-left right"></i>
                        <span class="badge badge-info right">6</span>
                    </p>
                </a>
            </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Review Mangement
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Chart
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                        User Management
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                        Post Management
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                        Post Category
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                        Post Tag
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                        Comments Management
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="../widgets.html" class="nav-link">
                    <i class="fas fa-gift"></i>
                    <p>
                        Coupon Management
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                        Vendor Management
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="../widgets.html" class="nav-link">
                    <i class="fas fa-gift"></i>
                    <p>
                        Seetings
                    </p>
                </a>
            </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
