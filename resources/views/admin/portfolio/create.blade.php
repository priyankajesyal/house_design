@extends('layouts.admin.app')

@section('content')

<form class="p-5 m-5 shadow" method="post" action="{{ route('portfolio.store') }}" enctype="multipart/form-data">
    <h2 class="text-center">Portfolio</h2>
    @csrf

    <div class="form-group">
        <div class="row">
            <div class="col-md-8 offset-md-2">

                <label>Title</label>
                <input type="text" class="form-control" name="title">
            </div>
        </div>
    </div>

       <div class="form-group">
           <div class="row">
               <div class="col-md-8 offset-md-2">

                   <label>Description</label>
                   {{-- <input type="text" class="form-control" name="description"> --}}
                   <textarea class="form-control" name="description"></textarea>
               </div>
           </div>
       </div>


          <div class="form-group">
              <div class="row">
                  <div class="col-md-8 offset-md-2">

                      <label>Price</label>
                      <input type="text" class="form-control" name="price">
                  </div>
              </div>
          </div>

             <div class="form-group">
                 <div class="row">
                     <div class="col-md-8 offset-md-2">
                         <label>Image</label>
                         <input type="file" name="images[]" multiple="multiple">


                     </div>
                 </div>
             </div>

             <div class="text-center">
                 <input type="submit" name="submit" class="btn btn-primary">
             </div>


</form>

@endsection

