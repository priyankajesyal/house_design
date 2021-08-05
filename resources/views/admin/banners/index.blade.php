@extends('layouts.admin.app')

@section('content')
    @if (Session::has('error'))
        <div class="alert alert-danger" role="alert">
            {{ Session::get('error') }}
        </div>
    @endif
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif


    <h2 class="">Banners<a class="float-right btn btn-primary" href="{{ route('banners.create') }}"><i class="fa fa-plus"
                aria-hidden="true"></i> Add New</a>



    </h2>
    <hr>

    <div class="table table-responsive">
        <table id="table_id" class="table display table-hover ">
            <thead class="text-white bg-primary">
                <th>S.NO</th>
                <th>TITLE</th>
                <th>IMAGE</th>
                <th col width="400">DESCRIPTION</th>
                <th data-orderable="false">ACTION</th>
            </thead>
            <tbody>
                @foreach ($posts as $key => $post)
                    <tr>
                        <td>
                            {{ $key + 1 }}
                        </td>
                        <td>
                            {{ $post->title }}
                        </td>
                        <td>
                            <img src="{{ url('storage/banner/' . $post->image) }}" width="100px">
                        </td>
                        <td>
                            {{ $post->description }}
                        </td>
                        <td>
                            <form action="{{ route('banners.destroy', $post->id) }}" method="post">
                                <a href="{{ route('banners.show', $post->id) }}" class="btn btn-info"><i
                                        class="fas fa-eye" title="VIEW"></i></a>

                                <a href="{{ route('banners.edit', $post->id) }}" class="btn btn-warning"><i
                                        class="fas fa-edit" title="EDIT"></i></a>

                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"
                                        title="DELETE"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-5">
                    <span>{{ $posts->links() }}</span>
                    <style>
                        .w-5 {
                            display: none;
                        }

                    </style>
                </div>
            </div>
        </div>
    </div>
@endsection
