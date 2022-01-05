@extends('AdminPanel.master')

@section('title')

Edit Users

@endsection

@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><strong>Edit Users</strong></h1>
                </div>
                @if(Session::get('message'))

                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Successfully</h5>
                        {{Session::get('message')}}
                    </div>
                @endif
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Edit Profile </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{route('user_update')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="col-12">
                            <input type="text" class="form-control @error('full_name') is-invalid @enderror" value="{{$user->full_name}}" name="full_name"  placeholder="User Full Name">
                            <input type="hidden" class="form-control @error('full_name') is-invalid @enderror" name="id"  value="{{$user->id}}" placeholder="User Full Name">
                        </div>
                        @error('full_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="col-12">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" disabled value="{{$user->email}}" name="email"  placeholder="User Email">
                        </div>
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="col-12">
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" value="{{$user->phone}}" name="phone"  placeholder="User Phone">
                        </div>
                        @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="col-12">
                            <textarea id="editor" rows="4"cols="6" class="form-control @error('address') is-invalid @enderror" name="address"  placeholder="User Address">{{$user->address}}</textarea>
                        </div>
                        @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <hr>
                    <div class="form-row">
                        <input type="file" name="photo" id="" class="@error('photo') is-invalid @enderror" placeholder="">
                    </div>
                    @error('photo')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <hr>
                    <img src="{{asset($user->photo)}}" alt="{{$user->full_name}}" width="100px" height="100px">
                    <hr>
                    <div class="form-row">

                        <select class="form-control @error('role') is-invalid @enderror" id="" name="role">
                            <option selected>Publication Status</option>
                            <option value="admin"{{$user->role == 'admin' ? 'Selected':''}}>Admin</option>
                            <option value="customer"{{$user->role == 'customer' ? 'Selected':''}}>Customer</option>
                        </select>
                    </div>
                    @error('role')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <hr>
                    <div class="form-row">

                        <select class="form-control @error('status') is-invalid @enderror" id="" name="status">
                            <option selected>Publication Status</option>
                            <option value="active"{{$user->status == 'active' ? 'Selected':''}}>Active</option>
                            <option value="inactive"{{$user->status == 'inactive' ? 'Selected':''}}>Inactive</option>
                        </select>
                    </div>
                    @error('status')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <hr>
                    <hr>
                    <div class="col-2">
                        <input type="submit" class="form-control btn btn-primary" name="btn" id="btn" value="Update User">
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </section>


@endsection

@section('js')
    <script>
        // CKEDITOR.replace( 'description' );

    </script>

@endsection
