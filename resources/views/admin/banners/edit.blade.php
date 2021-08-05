@extends('layouts.admin.app')

@section('content')


<div class="row">
    <div class="col-md-10 offset-1 ">
        @if (Session::has('error'))
        <div class="alert alert-danger" role="alert">
            {{ Session::get('error') }}
        </div>
        @endif
        @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
        @endif
        <form method="post" action="{{ route('banners.update', $post->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label for="banner_name" class="float-left">BANNER NAME</label><br>
            <input type="text" name="title" class="form-control" value="{{ $post->title }}"><br>

            <label for="banner_name" class="float-left">BANNER DESCRIPTION</label><br>
            <textarea name="description" id="description" class="form-control" style="overflow-y: hidden;">{{ $post->description }}</textarea><br>
            <img src="{{ url('storage/banner/' . $post->image) }}" width="300px"><br><br>
            <input type="file" name="image" placeholder="image" id="image"><br><br>
            

            <button type="submit" name="submit" class="btn btn-primary pull-right">UPDATE</button>




        </form>
    </div>
</div>

@endsection
