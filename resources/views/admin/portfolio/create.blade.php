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

<form class="p-5 m-5 shadow" method="post" action="{{ route('portfolio.store') }}" enctype="multipart/form-data">
    <h2 class="text-center">Portfolio</h2>
    @csrf

    <div class="form-group">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <label>Title</label>
                <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                @error('title')
                <div class="text-danger">{{ $message }}</div>
                @enderror

            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <label>Description</label>
                <textarea class="form-control" name="description">{{ old('description') }}</textarea>
                @error('description')
                <div class="text-danger">{{ $message }}</div>
                @enderror

            </div>
        </div>
    </div>


    <div class="form-group">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <label>Image</label>
                <input type="file" name="images[]" multiple="multiple">
                @error('images')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    <div class="text-center">
        <input type="submit" name="submit" class="btn btn-primary">
    </div>
</form>

@endsection
