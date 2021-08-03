@extends('layouts.admin.app')

@section('content')
<div class="mr-0 row">
    <div class="container p-5 mt-5 shadow">
        <h1 class="mb-3 text-center">View Design</h1>
        <div class="row justify-content-center">
            <div class="text-center col-md-8">
                {{-- {{ $data->portfolioimages }} --}}
                @foreach ($data->portfolioimages as $images)
                <img class="m-3 img-responsive" src="{{ $images->image }}" width="150" height="200">
                @endforeach

                <h1 class="m-3">{{ $data->title }}</h1>
                <div class="m-3 des">
                    {{ $data->description }}
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

