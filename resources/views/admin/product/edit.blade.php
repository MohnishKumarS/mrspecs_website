@extends('admin.layout')


@section('content')
    
<div>
  <div class="card">
    <div class="card-header">
      <h2>Edit Category</h2>
    </div>
    <div class="card-body">
      <form action="{{ url('admin/product/'.$pro->id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="mb-4">
                    <label for="" class="form-label">Select Category</label>
                    <select class="form-select" aria-label="Default select example" name="category_id">
                        <option selected value="">Choose a category</option>
                        @forelse ($cat as $item)
                            <option value="{{ $item->id }}" @if($item->id == $pro->category_id) selected   @endif>{{ $item->name }}</option>
                        @empty
                            <option value="">No category found</option>
                        @endforelse

                    </select>
                    @error('category_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>
            </div>
            <div class="col-lg-6">

                <div class="mb-4">
                    <label for="" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" value="{{$pro->name}}">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-4">
                  <label for="" class="form-label">Old image</label>
                  @php
                  $img = explode(',',$pro->image);
              @endphp
                 <div>
                   @foreach ($img as $val)
                   <img src="{{asset('image/product/'.$val)}}" alt="" width="150">
                   @endforeach
                 </div>
              </div>
          </div>
            <div class="col-lg-6">
                <div class="mb-4">
                    <label for="" class="form-label">New Image</label>
                    <input type="file" class="form-control" name="images[]" multiple>
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-4">
                  <label for="" class="form-label">Slug</label>
                  <input type="text" class="form-control" name="slug" value="{{$pro->slug}}">
                  @if ($errors->has('slug'))
                      <div class="text-danger">{{ $errors->first('slug') }}</div>
                  @endif
              </div>
          </div>
            <div class="col-lg-6">
                <div class="mb-4">
                    <label for="" class="form-label">Original Price</label>
                    <input type="number" class="form-control" name="org_price" value="{{$pro->original_price}}">
                    @if ($errors->has('org_price'))
                        <div class="text-danger">{{ $errors->first('org_price') }}</div>
                    @endif
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-4">
                    <label for="" class="form-label">Selling Price</label>
                    <input type="number" class="form-control" name="sell_price" value="{{$pro->selling_price}}">
                    @if ($errors->has('sell_price'))
                        <div class="text-danger">{{ $errors->first('sell_price') }}</div>
                    @endif
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-4">
                    <label for="" class="form-label">Quantity</label>
                    <input type="number" class="form-control" name="quantity" value="{{$pro->quantity}}">
                    @if ($errors->has('quantity'))
                        <div class="text-danger">{{ $errors->first('quantity') }}</div>
                    @endif
                </div>
            </div>


            <div class="col-lg-6">
                <div class="mb-4">
                    <label for="" class="form-label">Brands</label>
                    <select class="form-select" aria-label="Default select example" name="brand">
                        <option selected value="">Choose a brands</option>
                       
                       @forelse ($brand as $val)
                       <option value="{{$val->name}}" @if($pro->brand == $val->name) selected   @endif>{{$val->name}}</option>
                       @empty
                       <option value="Others">No brands found</option>
                       @endforelse
                        <option value="Others" @if($pro->brand == 'Others') selected   @endif>Others</option>
                    </select>
                    @if ($errors->has('brand'))
                    <div class="text-danger">{{ $errors->first('brand') }}</div>
                @endif
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-4">
                    <label for="" class="form-label">Frame Shape</label>
                    <select class="form-select" aria-label="Default select example" name="shape">
                        <option selected value="">Choose a brands</option>
                        <option value="Round" @if($pro->shape == 'Round') selected   @endif>Round</option>
                        <option value="Rectangle" @if($pro->shape == 'Rectangle') selected   @endif>Rectangle</option>
                        <option value="Square" @if($pro->shape == 'Square') selected   @endif>Square</option>
                        <option value="oval" @if($pro->shape == 'oval') selected   @endif>oval</option>
                        <option value="Aviator" @if($pro->shape == 'Aviator') selected   @endif>Aviator</option>
                        <option value="Geometric" @if($pro->shape == 'Geometric') selected   @endif>Geometric</option>
                    </select>
                    @if ($errors->has('shape'))
                    <div class="text-danger">{{ $errors->first('shape') }}</div>
                @endif
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-5">
                    <label for="" class="form-label">Action</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1" {{$pro->trending == true ? "checked" : ''}}
                                name="trending">
                            <label class="form-check-label" for="inlineCheckbox1">Trending</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" {{$pro->popular == true ? "checked" : ''}}
                                name="popular">
                            <label class="form-check-label" for="inlineCheckbox2">Popular</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-5 text-center">
                <button type="submit" class="btn btn-warning w-25">Submit</button>
            </div>


        </div>
    </form>
    </div>
  </div>
</div>





@endsection