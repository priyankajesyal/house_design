@extends('layouts.admin.app')

@section('content')
<h1 class="my-3 text-center">Update User</h1>

<div class="row">
    <div class="p-5 shadow col-md-10 offset-1">
        
        <form action="{{ route('users.update',$data->id) }}" method="post">
            @csrf
            {{ method_field('PUT') }}
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <label>Name</label>
                    <input type="text" name="name" value="{{ $data->name }}" class="mb-3 form-control">
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <label>Email</label>
                    <input type="text" name="email" value="{{ $data->email }}" class="mb-3 form-control">
                    @error('email')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <input type="submit" name="submit" value="UPDATE" class="m-3 btn btn-primary">

                </div>
            </div>
            
        </form>
    </div>
</div>
@endsection
