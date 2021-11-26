@extends('layouts.app')

@section('content')

    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> --}}





    <!--admin-->
    <div class="wrapper">
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
          <!-- Brand Logo -->
          <a href="index3.html" class="brand-link">
            <span class="brand-text font-weight-light">Dashboard</span>
          </a>

          <!-- Sidebar -->
          <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">

              <div class="info">
                <a href="#" class="d-block">Hagar</a>
              </div>
            </div>


            <!-- Sidebar Menu -->
            <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                  <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                      Menu
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{ route('all.users') }}" class="nav-link active">
                        <i class="fas fa-users nav-icon"></i>
                        <p>Users</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('create.user') }}" class="nav-link">
                        <i class="fas fa-user-plus nav-icon"></i>
                        <p>Add Users</p>
                      </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('all.products') }}" class="nav-link">
                            <i class="fas fa-box-open nav-icon"></i>
                            <p>Products</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ route('create.product') }}" class="nav-link">
                            <i class="fas fa-plus nav-icon"></i>
                            <p>Add Product</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('all.categories')}}" class="nav-link">
                            <i class="fas fa-th-large nav-icon"></i>
                            <p>Category</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ route('create.category') }}" class="nav-link">
                            <i class="fas fa-plus nav-icon"></i>
                             <p>Add Category</p>
                        </a>
                      </li>
                  </ul>
                </li>
              </ul>
            </nav>
            <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0">Home Page</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Home Page</li>
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->

            <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6">


              <div class="card card-primary card-outline">
                  <div class="card-header">
                    <h5 class="m-0">Users</h5>
                  </div>
                  <div class="card-body">
                    <p class="card-text">Add or edit users</p>
                    <a href="{{ route('create.user') }}" class="btn btn-primary">Add Users</a>
                  </div>
                </div>

                <div class="card card-primary card-outline">
                  <div class="card-header">
                    <h5 class="m-0">Products</h5>
                  </div>
                  <div class="card-body">


                    <p class="card-text">Add or edit Products</p>
                    <a href="{{ route('create.product') }}" class="btn btn-primary">Add Products</a>
                  </div>
                </div>


            </div>
            <!-- /.col-md-6 -->
            <div class="col-lg-6">
              <div class="card card-primary card-outline">
                  <div class="card-header">
                    <h5 class="m-0">Cateogry</h5>
                  </div>
                  <div class="card-body">

                    <p class="card-text">Add or edit Category</p>
                    <a href="{{ route('create.category') }}" class="btn btn-primary">Add Cateogry</a>
                  </div>
                </div>


            </div>
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
        </div>
        <!-- /.content-wrapper -->



        <!-- Main Footer -->
        <footer class="main-footer">

          <!-- Default to the left -->
          <strong>Copyright &copy; 2021 <a href="https://adminlte.io">Hagar Ahmed</a>.</strong> All rights reserved.
        </footer>
      </div>
    <!--admin-->

@endsection
