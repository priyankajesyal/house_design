@extends('layouts.admin.app')
@section('content')
<h2 class="">PORTFOLIO<a class="float-right btn btn-primary" href="{{ route('portfolio.create') }}"><i class="fas fa-folder-plus"></i> Add New</a>
</h2>
<hr>
<table id="table_id" class="table display able-hover">
    <thead class="text-white bg-primary">
        <tr>
            <th>S.no</th>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $value->title }}</td>
            <td>{{ $value->description }}</td>
            <td>{{ $value->price }}</td>
            <td>
                <form method="post" action="{{ route('portfolio.destroy', $value->id) }}">
                    @csrf
                    @method('DELETE')
                    <a class="btn btn-info" href="{{ route('portfolio.show', $value->id) }}"><i class="fas fa-eye"></i></a>
                    <a class="btn btn-warning" href="{{ route('portfolio.edit', $value->id) }}"><i class="fas fa-edit"></i></a>
                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </form>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
