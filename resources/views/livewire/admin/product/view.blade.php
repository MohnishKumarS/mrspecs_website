<div>

  <div class="card">
    <div class="card-header shadow">
      <h2>Product view</h2>
    </div>
    <div class="card-body">
         
      <table class="table table-bordered table-hover my-4 text-center">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Category</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Brand</th>
            <th scope="col">Trending</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @php
              $i= 1;
          @endphp
           @forelse ($product as $val)
           @php
               $image = explode(',',$val->image);
           @endphp
           <tr>
            <th scope="row">{{$i++}}</th>
            <td>
              <div>
                <img src="{{asset('image/product/'.$image[0])}}" alt="product-image" width="350">
              </div>
            </td>
            <td>{{$val->category->name}}</td>
            <td>{{$val->name}}</td>
            <td>{{$val->selling_price}}<s class="ms-2 text-muted">{{$val->original_price}}</s></td>
            <td>{{$val->brand}}</td>
            <td>
                <input class="form-check-input" type="checkbox" {{$val->trending == "1" ? 'checked' : '' }} @disabled(true)> 
            </td>
            <td>
              <div>
                <a href="{{url('admin/product/'.$val->id.'/edit')}}" class="btn btn-outline-primary btn-sm">Edit</a>
                <a href="{{url('admin/product/'.$val->id.'/delete')}}"  class="btn btn-outline-danger btn-sm ms-2" onclick="return confirm('Are you sure to delete this product?')">Delete</a>
              </div>
            </td>
          </tr>
           @empty
               <tr>
                <td colspan="4">
                  <div class="my-5 text-center">
                    <div class="text-danger">No Product found</div>
                  </div>
                </td>
               </tr>
           @endforelse
     
        </tbody>
      </table>

      {{-- ---- paginate ---- --}}
      <div class="mt-4">
          {{$product->links()}}
      </div>
    </div>
  </div>



</div>


