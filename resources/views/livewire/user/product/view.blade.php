
<div>
  
  @php
  $img = explode(',',$pro->image);

  $discount = $pro->original_price - $pro->selling_price;
  $offer = round(($discount / $pro->original_price) * 100);
  // echo $offer;
@endphp

<div class="single-pro">
  <div>
      <nav aria-label="breadcrumb mb-4">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{url('collection/'.$cat->slug)}}">{{$cat->name}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">Product</li>
          </ol>
        </nav>
  </div>
<div class="row">
  <div class="col-6">
    <div class="product-images">
      @foreach ($img as $val)
      <div class="pro-img">
        <img src="{{asset('image/product/'.$val)}}" alt="" class="img-fluid">
      </div>
      @endforeach
    </div>

  </div>
  <div class="col-6">
    <div class="pro-content">

      <h3 class="pro-title">{{$pro->name}}</h3>
      <h5 class="pro-price mb-4"><span>₹{{$pro->original_price}}</span> <span>₹{{$pro->selling_price}}</span></h5>
      <div class="pro-disc">Discount : <span>{{$offer}}%</span></div>
      <div class="pro-content">Frame + Lens</div>
      <div class="pro-btns text-center my-5">
        <button type="button" wire:click= "addToCart({{$pro->id}})" class="btn-normal w-50 text-dark">Add to cart</button>
      </div>
</div>
</div>



</div>


   

