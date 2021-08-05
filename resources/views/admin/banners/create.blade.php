
@extends('layouts.admin.app')

@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-title ">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">CREATE BANNER</h4>
                    </div>
                </div>
                <hr>
                <div class="card-body">
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
                    <form method="post" action="{{ route('banners.index') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">BANNER NAME</label><br>
                            <input type="text" name="title" class="form-control" placeholder="Enter banner Name"
                                value="{{ old('title') }}">
                            <span style="color:red;">@error('title'){{ $message }}@enderror</span>
                            </div><br>
                            <div class="form-group">
                                <label for="description">BANNER DESCRIPTION</label><br>
                                <textarea name="description" id="description" class="form-control"
                                    placeholder="Enter Description">{{ old('description') }}</textarea>
                                <span style="color:red;">@error('description'){{ $message }}@enderror</span>
                                </div><br>
                                <input type="hidden" name="user_id" value="">
                                        <div class="form-group">
                                            <label for="image">BANNER IMAGE</label><br>
                                            <input type="file" name="image" class="form-control" placeholder="Upload Image"
                                                style="opacity:1;position:static !important;">
                                            <span style="color:red;">@error('image'){{ $message }}@enderror</span>
                                            </div><br>
                                            <div class="card-link">
                                                <button type="submit" class="btn btn-primary pull-right">Create Banner</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endsection
