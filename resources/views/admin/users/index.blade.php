@extends('layouts.admin.app')
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

<h2 class="">USERS<a class="float-right btn btn-primary" href="{{ route('users.create') }}"><i class="fas fa-folder-plus"></i> Add New</a>
</h2>
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table id="table_id" class="table display table-hover ">
                    <thead class="text-white bg-primary">
                        <tr>
                            <th>S.no</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th data-orderable="false">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $value)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->email }}</td>
                            <td>
                                <form method="post" action="{{ route('users.destroy', $value->id) }}">

                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-info" href="{{ route('users.show', $value->id) }}"><i class="fas fa-eye"></i></a>
                                    <a class="btn btn-warning" href="{{ route('users.edit', $value->id) }}"><i class="fas fa-edit"></i></a>
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')"><i class="fas fa-trash"></i></button>
                                </form>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection
