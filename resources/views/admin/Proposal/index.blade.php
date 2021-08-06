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

  
<h2>PROPOSALS</h2>
<hr>
<table id="table_id" class="table table-hover table-bordered">
    <thead class="text-white bg-primary">
        <tr>
            <th>S.no</th>
            <th>Portfolio</th>
            <th>Name</th>
            <th data-orderable="false">Action</th>
        </tr>
    </thead>
    <tbody>
        {{-- {{ $input }} --}}
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $value->portfolio->title }}</td>
            <td><a href="{{ route('users.show',$value->user->id) }}">{{ $value->user->name }}</a></td>


            <td>
                <form method="post" action="{{ route('proposal.destroy', $value->id) }}">
                    @csrf
                    @method('DELETE')
                    <a class="btn btn-info" href="{{ route('proposal.show', $value->id) }}"><i class="fas fa-eye"></i></a>
                    <a class="btn btn-warning" href="{{ route('proposal.edit', $value->id) }}"><i class="fas fa-edit"></i></a>
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')"><i class="fas fa-trash"></i></button>
                </form>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
