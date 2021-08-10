@extends('layouts.admin.app')

@section('content')
<h2 class="">Milestones</h2>
<hr>
{{ $data }}
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table id="table_id" class="table display table-hover ">
                    <thead class="text-white bg-primary">
                        <tr>
                            <th>S.no</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Amount</th>
                            <th data-orderable="false">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $value)
                        <tr>
                            <td>{{ $key + 1 }}</td>

                            <td>{{ $value->milestone->title }}</td>
                            <td>{{ $value->milestone->price }}</td>

                            <td>{{ $value->amount }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
