@extends('layouts.admin.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
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

                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Banners<a href="{{ route('banners.create') }}"
                            class="btn btn-round btn-fill btn-outline-primary btn-sm float-right"><i class="fa fa-plus"
                                aria-hidden="true"></i> Add New Banner</a></h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary text-center">
                                <th>S.NO</th>
                                <th>TITLE</th>
                                <th>IMAGE</th>
                                <th>DESCRIPTION</th>
                                <th>ACTION</th>
                            </thead>

                            <tbody class="text-center">

                                @foreach ($posts as $key=>$post)
                                    <tr>
                                        <td>
                                            {{ $key+1 }}
                                        </td>
                                        <td>
                                            {{ $post->banner_name }}
                                        </td>
                                        <td>
                                            <img src="{{ url('storage/banner/' . $post->image) }}" width="100px">
                                        </td>
                                        <td>
                                            {{ $post->status ? 'Active' : 'Inactive' }}
                                        </td>
                                        <td>
                                            <form action="{{ route('banners.destroy', $post->id) }}" method="post">
                                                <a href="{{ route('banners.show', $post->id) }}" class="btn btn-info"><i
                                                        class="fa fa-info" aria-hidden="true" title="DETAILS"></i></a>
                                                <a href="{{ route('banners.edit', $post->id) }}" class="btn btn-warning"><i
                                                        class="fa fa-pencil" title="UPDATE"></i></a>
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
                </div>
            </div>
        </div>
    </div>
@endsection
