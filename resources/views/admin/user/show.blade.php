@extends('layouts.admin.app')

@section('content')
<div class="mr-0 row">
    <div class="container p-5 mt-5 shadow">
        <h1 class="mb-3 text-center">View User</h1>
        <div class="row justify-content-center">
            <div class="text-center col-md-8">
                <h1 class="m-3">{{ $data->name }}</h1>
                <div class="m-3 des">
                    {{ $data->email }}
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
