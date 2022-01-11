@php
    $prefix = Request::route()->getPrefix();
       $route = Route::current()->getname();
@endphp
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
            <a href="{{route('admin')}}" class="nav-link {{($route == 'admin' ? 'active':'')}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
            <li class="nav-item has-treeview {{($route == 'category_list')?'menu-open': ''}}
            {{($route == 'category_edit')?'menu-open': ''}}
            {{($route == 'add_category')?'menu-open': ''}}
            {{($route == 'subcategory')?'menu-open': ''}}
            {{($route == 'add_subcategory')?'menu-open': ''}}
            {{($route == 'subcategory_edit')?'menu-open': ''}}
            {{($route == 'child_category'?'menu-open':'')}}
            {{($route == 'add_child_category'?'menu-open':'')}}
            {{($route == 'child_category_edit'?'menu-open':'')}}

                ">



                <a href="#" class="nav-link {{($route == 'category_list')?'active': ''}}
                {{($route == 'category_edit')?'active': ''}}
                {{($route == 'add_category')?'active': ''}}
                {{($route == 'subcategory')?'active': ''}}
                {{($route == 'add_subcategory')?'active': ''}}
                {{($route == 'subcategory_edit')?'active': ''}}
                {{($route == 'child_category'?'active':'')}}
                {{($route == 'add_child_category'?'active':'')}}
                {{($route == 'child_category_edit'?'active':'')}}


                    ">
                    <i class="fas fa-shopping-bag"> </i>
                    <p>
                        Category
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview ">
                    <li class="nav-item" >
                        <a href="{{route('category_list')}}" class="nav-link  {{($route == 'category_list'?'active':'')}}
                        {{($route == 'category_edit'?'active':'')}}
                            ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Category List</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('add_category')}}" class="nav-link {{($route == 'add_category')?'active': ''}} ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Category</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('subcategory')}}" class="nav-link
                            {{($route == 'subcategory')?'active': ''}}
                            {{($route == 'add_subcategory')?'active': ''}}
                            {{($route == 'subcategory_edit')?'active': ''}}
                            ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Sub Category</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('child_category')}}" class="nav-link
                            {{($route == 'child_category'?'active':'')}}
                            {{($route == 'add_child_category'?'active':'')}}
                            {{($route == 'child_category_edit'?'active':'')}}
                            ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Child Category</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview
                {{($route =='banner.index')?'menu-open':''}}
                {{($route =='banner_edit')?'menu-open':''}}
                {{($route =='banner.create')?'menu-open':''}}

                ">
                <a href="#" class="nav-link
                    {{($route =='banner.index')?'active':''}}
                    {{($route =='banner_edit')?'active':''}}
                    {{($route =='banner.create')?'active':''}}
                    ">
                    <i class="fas fa-shopping-bag"> </i>
                    <p>
                        Banner
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('banner.index')}}" class="nav-link
                        {{($route =='banner.index')?'active':''}}
                        {{($route =='banner_edit')?'active':''}}
                            ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Banner List</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('banner.create')}}" class="nav-link {{($route =='banner.create')?'active':''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Banner</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview
            {{($route =='brand')?'menu-open':''}}
            {{($route =='brand_edit')?'menu-open':''}}
            {{($route =='brand_add')?'menu-open':''}}

                ">
                <a href="#" class="nav-link
                    {{($route =='brand')?'active':''}}
                {{($route =='brand_edit')?'active':''}}
                {{($route =='brand_add')?'active':''}}
                    ">
                    <i class="fas fa-shopping-bag"> </i>
                    <p>
                        Brand
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('brand')}}" class="nav-link
{{--                        {{($route =='brand_add')?'active':''}}--}}
                        {{($route =='brand')?'active':''}}
                        {{($route =='banner_edit')?'active':''}}
                            ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Brand List</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('brand_add')}}" class="nav-link {{($route =='brand_add')?'active':''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add </p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview
            {{($route =='userList')?'menu-open':''}}
            {{($route =='user_edit')?'menu-open':''}}
{{--            {{($route =='brand_add')?'menu-open':''}}--}}

                ">
                <a href="#" class="nav-link
                    {{($route =='userList')?'active':''}}
                {{($route =='user_edit')?'active':''}}
{{--                {{($route =='brand_add')?'active':''}}--}}
                    ">
                    <i class="fas fa-shopping-bag"> </i>
                    <p>
                        Users
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('userList')}}" class="nav-link
{{--                        {{($route =='brand_add')?'active':''}}--}}
                        {{($route =='userList')?'active':''}}
                        {{($route =='user_edit')?'active':''}}
                            ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>User List</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview
            {{($route == 'colors')?'menu-open': ''}}
            {{($route == 'sizes')?'menu-open': ''}}
            {{($route == 'add_color')?'menu-open': ''}}
            {{($route == 'color_edit')?'menu-open': ''}}
            {{($route == 'add_size')?'menu-open': ''}}
            {{($route == 'edit_size')?'menu-open': ''}}

                ">
                <a href="#" class="nav-link
                {{($route == 'colors')?'active': ''}}
                {{($route == 'sizes')?'active': ''}}
                {{($route == 'add_color')?'active': ''}}
                {{($route == 'color_edit')?'active': ''}}
                {{($route == 'add_size')?'active': ''}}
                {{($route == 'edit_size')?'active': ''}}
                    ">
                    <i class="fas fa-shopping-bag"> </i>
                    <p>
                        Product
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('products')}}" class="nav-link ">
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
                    <li class="nav-item">
                        <a href="{{route('sizes')}}" class="nav-link

                        {{($route == 'sizes')?'active': ''}}

                        {{($route == 'add_size')?'active': ''}}
                        {{($route == 'edit_size')?'active': ''}}
                        ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Sizes</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('colors')}}" class="nav-link
                        {{($route == 'colors')?'active': ''}}
                        {{($route == 'add_color')?'active': ''}}
                        {{($route == 'color_edit')?'active': ''}}
                                    ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Color</p>
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
