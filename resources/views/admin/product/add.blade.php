@extends('admin.layout')


@section('content')
    <div>
        <div class="card">
            <div class="card-header">
                <h2>Add New Product</h2>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/product') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-4">
                                <label for="" class="form-label">Select Category</label>
                                <select class="form-select" aria-label="Default select example" name="category_id">
                                    <option selected value="">Choose a category</option>
                                    @forelse ($cat as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
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
                                <input type="text" class="form-control" name="name" value="{{old('name')}}">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-4">
                                <label for="" class="form-label">Slug</label>
                                <input type="text" class="form-control" name="slug" value="{{old('slug')}}">
                                @if ($errors->has('slug'))
                                    <div class="text-danger">{{ $errors->first('slug') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-4">
                                <label for="" class="form-label">Image</label>
                                <input type="file" class="form-control" name="images[]" multiple>
                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-4">
                                <label for="" class="form-label">Original Price</label>
                                <input type="number" class="form-control" name="org_price" value="{{old('org_price')}}">
                                @if ($errors->has('org_price'))
                                    <div class="text-danger">{{ $errors->first('org_price') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-4">
                                <label for="" class="form-label">Selling Price</label>
                                <input type="number" class="form-control" name="sell_price" value="{{old('sell_price')}}">
                                @if ($errors->has('sell_price'))
                                    <div class="text-danger">{{ $errors->first('sell_price') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-4">
                                <label for="" class="form-label">Quantity</label>
                                <input type="number" class="form-control" name="quantity" value="{{old('quantity')}}">
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
                                    <option value="{{$val->name}}">{{$val->name}}</option>
                                    @empty
                                    <option value="Others">No brands found</option>
                                    @endforelse
                                    <option value="Others">Others</option>
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
                                    <option value="Round">Round</option>
                                    <option value="Rectangle">Rectangle</option>
                                    <option value="Square">Square</option>
                                    <option value="oval">oval</option>
                                    <option value="Aviator">Aviator</option>
                                    <option value="Geometric">Geometric</option>
                                </select>
                                @if ($errors->has('brand'))
                                <div class="text-danger">{{ $errors->first('brand') }}</div>
                            @endif
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-5">
                                <label for="" class="form-label">Action</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1"
                                            name="trending">
                                        <label class="form-check-label" for="inlineCheckbox1">Trending</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1"
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
