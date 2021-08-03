@extends('layouts.admin.app')

@section('content')

<div class="mr-0 row">
    <div class="p-5 mt-5 shadow col-md-12">
        <div class="row">
            <div class="m-3 col md-12">
                <div class="p-4 d-flex justify-content-between bg-dark text-light">
                    <div class="col-md-6">
                        <h2>Proposal</h2>
                        <p>Portfolio Name: {{ $data->portfolio->title }}</p>
                    </div>
                    <div class="text-right col-md-6">
                        <h4 class="text-capitalize">By: {{ $data->user->name }}</h4>
                    </div>
                </div>
                <div class="p-5 m-2 border content">
                    <h2>
                        Description:
                        <textarea class="m-3 form-control" rows="4" disabled>{{ $data->description}}
                        </textarea>
                    </h2>
                    @foreach ($data->proposalimages as $images)
                    <img src="{{ $images->image}}" class="p-2 m-2 border" width="200" height="200">
                    @endforeach
                </div>
            </div>
        </div>

        @if($data->userpayment)
        <div class="row">
            <div class="col-md-12">
                <h2 class="p-4 bg-dark text-light">Proposal Request Payment Status</h2>
                <div class="p-5 m-3 border">
                    <form method="post" action="{{ route('payment.update',$data->userpayment->id) }}">

                        @csrf
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="manual">Type</label>
                            <input type="text" id="manual" class="form-control" value="{{ $data->userpayment->type }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="amt">Ammount</label>
                            <input type="text" id="amt" class="form-control" value="{{ $data->userpayment->amount }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            @if ( $data->userpayment->status == 'Accept' || $data->userpayment->status == 'Decline' )
                            <select class="form-control" id="status" name="status" readonly>
                                <option value="">{{ $data->userpayment->status }}</option>
                            </select>

                            @else
                            <select class="form-control" id="status" name="status">
                                <option value="">--Select--</option>
                                <option value="Accept">Accept</option>
                                <option value="Decline">Decline</option>
                            </select>
                            @endif
                            @error('status')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="amt">Receipt Image</label><br>
                            <img src="{{ $data->userpayment->userpaymentimage->image}}" class="p-2 m-2 border" width="200" height="200">
                        </div>
                        @if ( $data->userpayment->status == 'Accept' || $data->userpayment->status == 'Decline' )

                        <input name="submit" id="submit" class="btn btn-primary" type="submit" disabled>
                        @else
                        <input name="submit" id="submit" class="btn btn-primary" type="submit">

                        @endif
                    </form>
                </div>
            </div>
        </div>

        @if ( $data->userpayment->status == 'Accept')
        <div class="row proposal">
            <div class="col-md-12">
                <div class="p-5 m-3 border">
                    <h2 class="p-4 bg-dark text-light">Proposal</h2>
                    <form action="{{ route('adminproposal.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="amt">Price</label>
                            <input type="text" id="amt" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="amt">Comments</label>
                            <textarea class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="amt">Status</label>
                            <select name="status" class="form-control">
                                <option value="">--Select--</option>
                                <option value="">Selected</option>
                                <option value="">Rejected</option>
                            </select>
                            @error('status')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label for="amt">Attachment</label>
                            <input type="file" id="attachment">
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary">
                    </form>

                </div>
            </div>
        </div>

        <div id="pro"></div>
        <button type="submit" class="btn btn-dark add">Add Proposal</button>
        @endif
        @endif
    </div>
</div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    var counter = 0;
    $(document).ready(function() {
        $('#submit').click(function() {
            $('.proposal,.add').show();
        });
        $('.add').click(function() {
                if (counter >= 1) {
                    $('.add').prop("disabled", true);
                } else {
                    $('.proposal').last().clone().appendTo("#pro");
                });
        }
    });

</script>


