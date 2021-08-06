@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="offset-4 col-md-4 ">
                <h3 class="text-center">USER PROFILE</h3>
                <div class="card">
                    <div class="text-center details col-md-10 offset-1"> 
                        <br>
                        <div class="text-center image">
                            <img src="{{ $data->profile_photo_url }}" class="img-fluid img-thumbnail "
                                alt="{{ $data->name }}" width="200px" height="200px">
                        </div>
                        <hr>
                        <label for="name" style="font-weight:900"> USER:</label>
                        <input type="text" class="form-control" name="name" value="{{ $data->name }}" readonly>
                        <hr>
                        <label for="email" style="font-weight:900"> EMAIL:</label>
                        <input type="text" class="form-control" name="email" value="{{ $data->email }}" readonly>
                       <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
