@extends('layouts.admin.app')

@section('content')

<div class="conatiner">
    <div class="row">
        <div class="col-md-8 offset-2">
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


            <div class="card">
                <div class="card-header bg-primary ">
                    <h2 class="text-white">Bank Details <a href="{{ route('bank-details.edit',$data->id) }}" class="float-right btn btn-primary" title="EDIT"><i class="fa fa-edit" title="EDIT"></i></a></h2>


                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Account Holder Name</label>
                                <input type="text" name="acc" value="{{ $data->account_holder_name }}" class="form-control" readonly><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Bank Name</label>
                                <input type="text" name="acc" value="{{ $data->bank_name }}" class="form-control" readonly><br>



                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label>Account Number</label>
                                <input type="text" name="acc" value="{{ $data->account_number }}" class="form-control" readonly><br>



                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label>IFSC Code</label>
                                <input type="text" name="acc" value="{{ $data->ifsc_code }}" class="form-control" readonly><br>



                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- <div class="table table-bordered table-hover">
    <table id="table_id" class="table">
        <thead class="thead-dark">
            <tr>
                <th>S.no</th>
                <th>Account Holder Name</th>
                <th>Bank Name</th>
                <th>Account Number</th>
                <th>IFSC Code</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $value)
            <tr>
                <td>{{ $key + 1 }}</td>
<td>{{ $value->account_holder_name }}</td>
<td>{{ $value->bank_name }}</td>
<td>{{ $value->account_number }}</td>
<td>{{ $value->ifsc_code }}</td>
<td>
    <form method="post" action="{{ route('bank-details.destroy', $value->id) }}">
        @csrf
        @method('DELETE')
        <a class="btn btn-info" href="{{ route('bank-details.show', $value->id) }}"><i class="fas fa-eye"></i></a>

        <a class="btn btn-warning" href="{{ route('bank-details.edit', $value->id) }}"><i class="fas fa-edit"></i></a>

        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
    </form>
    </tr>
    @endforeach
    </tbody>
    </table>
    </div> --}}



    @endsection
