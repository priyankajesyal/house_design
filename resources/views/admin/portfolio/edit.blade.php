@extends('layouts.admin.app')

@section('content')
 <h1 class="my-3 text-center">Update Portfolio Design</h1>

<div class="row">
    <div class="p-5 shadow col-md-10 offset-1">
        <form name="form" id="form" action="{{ route('portfolio.update',$data->id) }}" method="post" enctype="multipart/form-data">
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
                    <textarea name="description" class="mb-3 form-control">{{ $data->description }}</textarea>
                    @error('description')
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
                <div class="col-md-10 offset-md-1 d-flex">
                    <label>Image</label><br>
                    @foreach ($data->portfolioimages as $images)
                            <div class="img-wrap" id="img-wrap-{{ $images->id }}">
                                <span onclick="deleteImage({{ $images->id }})">
                                    <span class="close">&times;</span>
                                </span>
                                <img class="m-3 img-responsive" src="{{ $images->image }}" width="150" height="200">
                            </div>
                    @endforeach
                </div>
               <div class="col-md-10 offset-md-1">
                <input type="file" name="images[]" multiple="multiple"><br><br>
                <input type="submit" name="submit" class="m-3 btn btn-primary">
               </div>
            </div>
        </form>
    </div>
@endsection




