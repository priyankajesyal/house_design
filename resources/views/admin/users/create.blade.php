@extends('layouts.admin.app')

@section('content')


@if (Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
</div>
@endif
@if (Session::has('error'))
<div class="alert alert-danger" role="alert">
    {{ Session::get('error') }}
</div>
@endif

<form class="p-5 m-5 shadow" method="post" action="{{ route('users.store') }}" enctype="multipart/form-data">
    <h2 class="text-center">User</h2>
    @csrf
    <div class="form-group">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                @error('name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <label>Email</label>
                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                @error('email')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <label>Password</label>
                <input type="text" class="form-control" name="password" value="{{ old('password') }}">
                @error('password')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
     {{-- <div class="form-group">
         <div class="row">
             <div class="col-md-8 offset-md-2">
                 <label>Confirm Password</label>
                 <input type="text" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}">

                 @error('password_confirmation')

                 <div class="text-danger">{{ $message }}</div>
                 @enderror
             </div>
         </div>
     </div> --}}

    <div class="text-center">
        <input type="submit" name="submit" class="btn btn-primary">
    </div>
</form>

@endsection
