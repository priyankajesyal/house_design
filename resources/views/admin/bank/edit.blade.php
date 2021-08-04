@extends('layouts.admin.app')

@section('content')
<div class="row">
    <div class="shadow col-md-10 offset-1">

        <div class="card-header bg-primary ">
            <h2 class="text-white">Update Bank Details</h2>
        </div><br>

        <form action="{{ route('bank-details.update',$data->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-10 offset-1">
                    <label>Account Holder Name</label>
                    <input type="text" name="account_holder_name" value="{{ $data->account_holder_name }}" class="form-control">
                    @error('account_holder_name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 offset-1">
                    <label>Bank Name</label>
                    <input type="text" name="bank_name" value="{{ $data->bank_name }}" class="form-control">
                    @error('bank_name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <br>

                </div>
            </div>

            <div class="row">
                <div class="col-md-10 offset-1">
                    <label>Account Number</label>
                    <input type="text" name="account_number" value="{{ $data->account_number }}" class="form-control">
                    @error('account_number')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <br>

                </div>
            </div>

            <div class="row">
                <div class="col-md-10 offset-1">
                    <label>IFSC Code</label>
                    <input type="text" name="ifsc_code" value="{{ $data->ifsc_code }}" class="form-control">
                    @error('ifsc_code')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror<br>

                </div>
            </div>
            <div class="m-4 text-center">
                <input type="submit" name="submit" value="UPDATE" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>

@endsection

