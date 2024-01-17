@extends('layouts.userapp')

@section('content')
    <section>
        <div class="all-products">
            <div class="container">
                <div>
                    <h1 class="sec-title">Our Collections</h1>
                </div>

                

                {{-- ------- all - products -----  --}}

                <livewire:user.product.index  :products="$products" :category="$cat" />


            </div>
        </div>
    </section>
@endsection
