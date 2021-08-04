@extends('admin.layouts.admin')

@section('content')

    @foreach ($posts as $object)
        <div class="row">
            <div class="col-md-6 offset-3">
                <div class="card card-profile">
                    <div class="card-avatar">
                        <a href="#">
                            <img class="img" src="{{ url('storage/banner/' . $object->image) }}" />
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="card-category text-gray">BANNER / BANNER NAME</h6>
                        <h4 class="card-title" style="text-transform:uppercase;">{{ $object->banner_name }}</h4>
                        <p class="card-description" style="text-transform:capitalize;">
                            {{ $object->description }}
                        </p>
                        <p class="card-heading" style="text-transform:capitalize; font-weight:600">
                            {{ $object->status ? 'Active' : 'Inactive' }}
                        </p>

                    </div>
                </div>
            </div>
        </div>

    @endforeach


@endsection
