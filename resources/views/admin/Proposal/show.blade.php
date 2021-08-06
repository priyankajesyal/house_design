@extends('layouts.admin.app')
@section('content')
    <div class="mr-0 row">
        <div class="container p-5 mt-5 shadow">
            <div class="row">
                <div class="col md-12">
                    <div class="p-4 text-white d-flex justify-content-between bg-primary">
                        <div class="col-md-6">
                            <h2>Portfolio</h2>
                            {{ $data->portfolio->title }}
                        </div>
                        <div class="text-right col-md-6">
                            <h4 class="text-capitalize">By: {{ $data->user->name }}</h4>
                        </div>
                    </div>
                    <div class="p-5 m-2 border content">
                        <h2>
                            Description:
                            <textarea class="m-3 form-control" rows="6" disabled>{{ $data->description }}
                            </textarea>
                        </h2>
                        @foreach ($data->proposalimages as $images)
                            <img src="{{ $images->image }}" class="p-2 m-2 border" width="200" height="200">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
