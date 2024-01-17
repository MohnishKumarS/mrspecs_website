@extends('layouts.userapp')

@section('content')
<section>
  <div class="view-product">
      <div class="container">
          <div>
              <h1 class="sec-title">Our Products</h1>
          </div>

          

          {{-- ------- all - products -----  --}}

          <livewire:user.product.view  :product="$pro" :category="$cat" />


      </div>
  </div>
</section>
@endsection