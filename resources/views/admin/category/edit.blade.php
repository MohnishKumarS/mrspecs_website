@extends('admin.layout')


@section('content')
    
<div>
  <div class="card">
    <div class="card-header">
      <h2>Edit Category</h2>
    </div>
    <div class="card-body">
       <div class="row">
        <div class="col-lg-6">
          <form action="{{url('admin/category/'.$category->id)}}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
          <div class="mb-4">
            <label for="" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{$category->name}}">
            @error('name')
                <div class="text-danger">{{$message}}</div>
            @enderror
          </div>
          <div class="mb-4">
            <label for="" class="form-label">Slug</label>
            <input type="text" class="form-control" name="slug" value="{{$category->slug}}">
            @if ($errors->has('slug'))
                <div class="text-danger">{{$errors->first('slug')}}</div>
            @endif
          </div>
          <div class="mb-5">
            <label for="" class="form-label">Image</label>
            <input type="file" class="form-control" name="image">
            <div class="mt-3">
              <img src="{{asset('image/category/'.$category->image)}}" alt="category-img" width="100">
            </div>
            @error('image')
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