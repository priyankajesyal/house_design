@extends('layouts.admin.app')

@section('content')

    @foreach ($posts as $object)
        <div class="container">
            <div class="row">
                <div class="offset-4 col-md-4 ">
                    <h3 class="text-center">BANNERS</h3>
                    <div class="card">
                        <div class="details col-md-10 offset-1 text-center">
                            <br>
                            <div class="image text-center">
                                <a href="{{ url('storage/banner/' . $object->image) }}"><img
                                        class="img img-fluid img-thumbnail"
                                        src="{{ url('storage/banner/' . $object->image) }}" width="200px" /></a>
                                <hr>
                                <label for="" style="font-weight:900">BANNER</label>
                                <p class="m-3">{{ $object->title }}</p>
                                <hr>
                                <label for="" style="font-weight:900">DESCRIPTION</label>
                                <div class="m-3 des">
                                    {{ $object->description }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
