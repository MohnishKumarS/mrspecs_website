<div>
    @if (count($products) > 0)
    <div class="row">
        <div>
            <nav aria-label="breadcrumb mb-4">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                  
                  <li class="breadcrumb-item active" aria-current="page">Collections</li>
                </ol>
              </nav>
        </div>
      @foreach ($products as $val)
          <div class="col-lg-4 col-md-6 col-12 mb-4">
              @php
                  $img = explode(',', $val->image);

              @endphp

              <div class="product-wrap">
                  <div class="product_img">
                      <img src="{{ asset('image/product/' . $img[0]) }}" alt="" class="img-fluid">
                  </div>
                  <div class="product_detail">
                      <h2 class="product__title">
                          <a
                              href="{{ url('collection/' . $val->category->slug . '/' . $val->slug) }}">{{ $val->name }}</a>
                      </h2>
                      <div class="product__price"><span
                              class="product__ori">₹{{ $val->original_price }}</span> <span
                              class="product__sell">₹{{ $val->selling_price }}</span></div>
                      <div class="product__btn">
                          <a href="" class="btn-main">add cart</a>
                      </div>
                  </div>
              </div>
          </div>
      @endforeach

  </div>
    @else
          <div>
            No products found
          </div>
    @endif
</div>
