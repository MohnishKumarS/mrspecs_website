@extends('admin.layout')


@section('content')
    
<div>
  <div class="card">
    <div class="card-header">
      <h2>Add Brands</h2>
    </div>
    <div class="card-body">
       <div class="row">
        <div class="col-lg-6 m-auto">
          <form action="{{url('admin/brands/store')}}" method="post" >
            @csrf
          <div class="mb-4">
            <label for="" class="form-label">Brand Name</label>
            <input type="text" class="form-control" name="name">
            @error('name')
                <div class="text-danger">{{$message}}</div>
            @enderror
          </div>
          
          <div class="mb-4 text-center">
            <button type="submit" class="btn btn-warning w-50">Submit</button>
          </div>
        </form>
        </div>
       </div>
    </div>
  </div>
</div>



@endsection