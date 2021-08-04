@extends('admin.layouts.admin')

@section('content')


    <div class="row">
        <div class="col-md-6 offset-3">
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
            <form method="post" action="{{ route('banner.update', $post->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card card-profile">
                    <div class="card-avatar">
                        <img src="{{ url('storage/banner/' . $post->image) }}" width="300px">
                    </div><br>
                    <input type="file" name="image" class="offset-5" placeholder="image" id="image" />
                    <div class="card-body">
                        <label for="banner_name" class="float-left">BANNER NAME</label><br>
                        <input type="text" name="banner_name" class="form-control" value="{{ $post->banner_name }}"><br>

                        <label for="banner_name" class="float-left">BANNER DESCRIPTION</label><br>
                        <textarea name="description" id="description" class="form-control"
                            style="overflow-y: hidden;">{{ $post->description }}</textarea><br>

                        <label for="status" class="float-left">BANNER STATUS</label><br>
                        <select name="status" id="status" class="form-control">
                            <option value="1" >Active</option>
                            <option value="0" >Inactive</option>
                        </select><br>

                        <div class="card-link">
                            <button type="submit" name="submit" class="btn btn-warning pull-right">UPDATE PROFILE</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
