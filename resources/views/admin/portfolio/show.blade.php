@extends('layouts.admin.app')

@section('content')
    <h1 class="mb-3 text-center">View Design</h1>
    <div class="mr-0 row">
        <div class="container p-5 shadow">
            <div class="row justify-content-center">
                <div class="text-center col-md-8">
                    {{-- {{ $data->portfolioimages }} --}}
                    @foreach ($data->portfolioimages as $images)
                        <a href="{{ $images->image }}"><img class="m-3 img-responsive img-fluid img-thumbnail"
                                src="{{ $images->image }}" width="150"></a>
                    @endforeach <hr>
                    <label for="" style="font-weight:900">PORTFOLIO</label>
                    <p class="m-3">{{ $data->title }}</p>

                    <hr>
                    <label for="" style="font-weight:900">DESCRIPTION</label>
                    <div class="m-3 des">
                        {{ $data->description }}
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
