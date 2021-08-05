@extends('layouts.admin.app')

@section('content')

@foreach ($posts as $object)
<h1 class="text-center ">View Design</h1>
<div class="mr-0 row">
    <div class="container p-5 mt-5 shadow">
        
        <div class="row justify-content-center">
            <div class="text-center col-md-8">
                <img class=" img" src="{{ url('storage/banner/' . $object->image) }}" width="200px" height="200px" /><br><br>
                {{-- <h5>BANNER NAME</h5> --}}
                <h6 class="m-3">{{ $object->title }}</h6>
                {{-- <h5>BANNER DESCRIPTION</h5> --}}

                <div class="m-3 des">
                    {{ $object->description }}
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
