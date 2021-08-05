@extends('layouts.admin.app')

@section('content')
<div class="row">
    <div class="shadow col-md-12">

        <h1 class="mt-3 text-center">Update Portfolio Design</h1>
        <form action="{{ route('portfolio.update',$data->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <label>Title</label>
                    <input type="text" name="title" value="{{ $data->title }}" class="mb-3 form-control">
                    @error('title')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <label>Description</label>
                    <input type="text" name="description" value="{{ $data->description }}" class="mb-3 form-control">
                    @error('description')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <label>Price</label>
                    <input type="text" name="price" value="{{ $data->price }}" class="mb-3 form-control">
                    @error('price')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    @error('images')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row ">
                <div class="col-md-10 offset-md-1">
                    <label>Image</label><br>
                    @foreach ($data->portfolioimages as $images)
                    <div class="row">
                        <div class="col-md-8">
                            <div class="img-wrap" id="img-wrap-{{ $images->id }}">
                                <span onclick="deleteImage({{ $images->id }})">
                                    <span class="close">&times;</span>
                                </span>
                                <img class="m-3 img-responsive" src="{{ $images->image }}" width="150" height="200">
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <input type="submit" name="submit" class="m-3 btn btn-primary">
        </form>
    </div>
</div>
@endsection
