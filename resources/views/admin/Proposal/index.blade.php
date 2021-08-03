@extends('layouts.admin.app')

@section('content')

<a class="float-right mr-5 btn btn-primary btn-lg" href="{{ route('portfolio.create') }}">Add Portfolio</a>

<table id="table_id" class="display">

    <thead>
        <tr>
            <th>S.no</th>
            <th>Portfolio</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $key => $value)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $value->portfolio->title }}</td>
            <td>{{ $value->user->name }}</td>
            <td>
                <form method="post" action="{{ route('proposal.destroy',$value->id) }}">
                    @csrf
                    @method('DELETE')
                    <a class="btn btn-info" href="{{ route('proposal.show',$value->id) }}">View</a>
                    <a class="btn btn-warning" href="{{ route('proposal.edit',$value->id) }}">Edit</a>
                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>



        </tr>
        @endforeach
    </tbody>
</table>


@endsection

