@extends('layouts.admin.app')

@section('content')

    <div class="card">
        <div class="card-header bg-dark ">
            <h2 class="text-white">PROPOSALS</h2>
        </div>
    </div>

    <div class="table table-bordered table-hover">
        <table id="table_id" class="table">
            <thead class="thead-dark">
                <tr>
                    <th>S.no</th>
                    <th>Portfolio</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $value)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $value->portfolio->title }}</td>
                        <td>{{ $value->user->name }}</td>
                        <td>
                            <form method="post" action="{{ route('proposal.destroy', $value->id) }}">
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-info" href="{{ route('proposal.show', $value->id) }}"><i
                                        class="fas fa-eye"></i></a>
                                <a class="btn btn-warning" href="{{ route('proposal.edit', $value->id) }}"><i
                                        class="fas fa-edit"></i></a>
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>

                            </form>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
