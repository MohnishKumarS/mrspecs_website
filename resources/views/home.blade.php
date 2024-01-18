@extends('layouts.userapp')

@section('content')
    {{-- ------ carousel --------- --}}

    <section>
        <div class="p-4">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">
                        <img src="{{ asset('image/slider/s-4.webp') }}" class="d-block w-100" alt="...">
                    </div>
                    {{-- <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{asset('image/slider/s-2.jpg')}}" class="d-block w-100" alt="...">
                  </div>bg-
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{asset('image/slider/s-3.webp')}}" class="d-block w-100" alt="...">
                  </div> --}}
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>


    {{-- ----------- about ----------- --}}

    <section>
        <div class="about-wrap">
            <div class="about-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6  mb-5">
                            <div>
                                <h1 class="sec-title">Our Purpose Motto</h1>
                            </div>
                            <div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo ea possimus natus vel sunt
                                    laboriosam vitae dolore rem corporis repellat, iure ullam dolorum tempore porro.
                                    Corrupti asperiores quo repellat laudantium et sunt necessitatibus cupiditate laborum
                                    voluptate ducimus, aliquid facere omnis ipsa nam quod distinctio deserunt voluptatum cum
                                    fugiat atque nostrum.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos dolore blanditiis
                                    quo quia incidunt deserunt magnam unde impedit amet atque. Officiis dolores autem
                                    incidunt nam, soluta voluptatum saepe illum esse.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center mb-5">
                            <div class="about-img-1 " data-aos="flip-left" data-aos-duration="3000">
                                <img src="{{ asset('image/about/a-1.webp') }}" alt="" class="img-fluid "
                                    width="500">
                            </div>
                            {{-- <div class="about-img-2"> 
                  <img src="{{asset('image/about/a-2.jpg')}}" alt="" class="img-fluid " width="800" height="533">
                </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ---------- advantage -------------- --}}

    <section>
        <div class="advantage-wrap">
            <div class="container">
                <div class="advantage-content">
                    <div>
                        <h1 class="sec-title center text-center">What makes us stand apart?</h1>
                    </div>
                    <div class="advantage-details">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-5">
                                <div>
                                    <div class="ad-icon"><i class='bx bx-glasses'></i></div>
                                    <h3 class="ad-text">High Quality Frame</h3>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-5">
                                <div>
                                    <div class="ad-icon"><i class='bx bxs-truck'></i></div>
                                    <h3 class="ad-text">Free Delivery</h3>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-5">
                                <div>
                                    <div class="ad-icon"><i class='bx bxs-purchase-tag'></i></div>
                                    <h3 class="ad-text">Affordable price</h3>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-5">
                                <div>
                                    <div class="ad-icon"><i class='bx bxs-low-vision'></i></div>
                                    <h3 class="ad-text">free vision check</h3>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-5">
                                <div>
                                    <div class="ad-icon"><i class='bx bxs-medal'></i></div>
                                    <h3 class="ad-text">100% genuine</h3>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-5">
                                <div>
                                    <div class="ad-icon"><i class='bx bxs-check-shield'></i></div>
                                    <h3 class="ad-text">1 year warranty</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ---------- collection category ------------ --}}

    <section>
        <div class="our-category">
            <div class="container">
                <div>
                    <h1 class="sec-title center text-center">What Are You Looking For?</h1>
                </div>

                <div class="row mt-5 " data-aos="zoom-in-up" data-aos-duration="3000">
                    <div class="mb-5">
                        <div class="category-owl owl-carousel owl-theme">
                            @foreach ($category as $val)
                                <div class="category-wrap">
                                    <a href="/collection/{{ $val->slug }}">
                                        <img src="{{ asset('image/category/' . $val->image) }}" alt="">
                                        <div class="cat-title">{{ $val->name }}</div>
                                    </a>
                                </div>
                            @endforeach

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- ---------- new collection ------ --}}

    <section>
        <div class="collections">
            <div class="container">
                <div class="row">
                    <div class="col  mb-5" data-aos="fade-right" data-aos-duration="3000">
                        <div class="collects-col1 ">
                            <div class="collects-details">
                                <h2 class="collect-item">New Collection</h2>
                                <p class="collect-item">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum, in?
                                </p>
                                <a href="" class="btn-normal collect-item">See more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5" data-aos="fade-left" data-aos-duration="3000">
                        <div class="collects-col2 ">
                            <div class="collects-details">
                                <h2 class="collect-item">Trendy Glass</h2>
                                <p class="collect-item">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum, in?
                                </p>
                                <a href="" class="btn-normal collect-item">See more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- ------------ our trending product  ----------- --}}

    <section>
        <div class="our-product">
            <div class="container">
                <div>
                    <h1 class="sec-title center text-center light">Our Featured Glasses</h1>
                </div>

                <div class="row">
                    <div class="col" data-aos="zoom-in-left" data-aos-duration="3000">
                        <div class="owl-carousel owl-theme product-owl">
                            @foreach ($trending as $val)
                                @php
                                    $img = explode(',', $val->image);

                                @endphp

                                <div class="product-wrap">
                                    <div class="product_img">
                                        <img src="{{ asset('image/product/' . $img[0]) }}" alt=""
                                            class="img-fluid">
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
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    {{-- ------------ our popular product  ----------- --}}

    <section>
        <div class="our-popular">
            <div class="container">
                <div>
                    <h1 class="sec-title center text-center">Our Popular Glasses</h1>
                </div>

                <div class="row">
                    <div class="col" data-aos="zoom-in-right" data-aos-duration="3000">
                        <div class="owl-carousel owl-theme product-owl">
                            @foreach ($popular as $val)
                                @php
                                    $img = explode(',', $val->image);

                                @endphp

                                <div class="product-wrap">
                                    <div class="product_img">
                                        <img src="{{ asset('image/product/' . $img[0]) }}" alt=""
                                            class="img-fluid">
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
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>





    {{-- -------------- Contact US ---------------------- --}}
    <section>
        <div class="our-contact">
            <div class="container">
                <div>
                    <h1 class="sec-title center text-center">Contact us</h1>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <form action="{{ url('contact-submit') }}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="contact">
                                <div>
                                    <h3>GET IN TOUCH</h3>
                                    <p class="text-muted">Have any questions? We'd love to hear from you</p>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" required
                                        pattern="(?:[A-Za-z].*?){4}" title="Enter a valid names & atleast 4characters">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Mobile</label>
                                    <input type="text" class="form-control" name="mobile" required
                                        pattern="[1-9]{10}" title="Enter 10 digit mobile number">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Message</label>
                                    <textarea rows="3" class="form-control" name="message" required></textarea>
                                </div>
                                <div class="my-5 text-center">
                                    <button class="btn-main w-50" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <div class="iframe-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.182321547617!2d80.21153937575613!3d13.02405881372462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5267f3e8d6791f%3A0xb34ace4eedd900bb!2sMr.SPECS!5e0!3m2!1sen!2sin!4v1704257743554!5m2!1sen!2sin"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>


                <div class="row mt-5 " data-aos="zoom-in" data-aos-duration="2000">
                    <div class="col-lg-3 col-md-6 col-12 mb-5">
                        <div class="contact-wrap c-1">
                            <div class="c-1"><i class='bx bx-envelope'></i></div>
                            <p>Email</p>
                            <p class="contact-info">abc@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-5">
                        <div class="contact-wrap c-2">
                            <div class="c-2"><i class='bx bx-phone-call'></i></div>
                            <p>Contact Us</p>
                            <p class="contact-info">+91 81246 12031</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-5">
                        <div class="contact-wrap c-3">
                            <div class="c-3"><i class='bx bx-location-plus'></i></div>
                            <p>Our Location</p>
                            <p class="contact-info">No.89, 39, W Jones Rd, West Saidapet, Saidapet, Chennai, Tamil Nadu
                                600015</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-5">
                        <div class="contact-wrap c-4">
                            <div class="c-4"><i class='bx bx-timer'></i></div>
                            <p>Timing</p>
                            <p class="contact-info">Mon-Sat: <span class="">9am-10pm</span></p>
                            <p class="contact-info">Sunday: <span class="">1pm-8pm</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="our-brands">
            <div class="container">
                <div>
                    <h1 class="sec-title center text-center">top Brands</h1>
                </div>

                <div class="brands text-center">
                    <span>
                        <img src="{{ asset('image/brands/b9.jpg') }}" alt="brands-opticals-mrspecs">
                    </span>
                    <span>
                        <img src="{{ asset('image/brands/b2.jpg') }}" alt="brands-opticals-mrspecs">
                    </span>
                    <span>
                        <img src="{{ asset('image/brands/b1.png') }}" alt="brands-opticals-mrspecs">
                    </span>
                    <span>
                        <img src="{{ asset('image/brands/b4.png') }}" alt="brands-opticals-mrspecs">
                    </span>
                    <span>
                        <img src="{{ asset('image/brands/b5.png') }}" alt="brands-opticals-mrspecs">
                    </span>
                    <span>
                        <img src="{{ asset('image/brands/b6.png') }}" alt="brands-opticals-mrspecs">
                    </span>
                    <span>
                        <img src="{{ asset('image/brands/b7.png') }}" alt="brands-opticals-mrspecs">
                    </span>
                    <span>
                        <img src="{{ asset('image/brands/b3.png') }}" alt="brands-opticals-mrspecs">
                    </span>
                </div>
            </div>
        </div>
    </section>



    @push('style')
        <style>
            /* ------------- animations ----------- */
            .animateMove {
                position: initial !important;
            }
        </style>
    @endpush

    <section>
        <div class="our-review">
            <div class="bg-moving-color">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="container">
                <div>
                    <h1 class="sec-title center text-center">See our google reviews saying</h1>
                </div>
                <div class="reviews">
                    <div class="row">
                        <div class="col">
                            <div class="owl-carousel owl-theme">
                                <div class="feedback">
                                    <div class="feed-img">
                                        <img src="{{ asset('image/feed/san.png') }}" alt="">
                                    </div>
                                    <div class="feed-name">santhosh raj</div>
                                    <div class="feed-desc">
                                        <span class="feed-icon pe-2"><i class='bx bxs-quote-left'></i></span> Highly
                                        recommended!! 👍🏻The choice range is excellent and more over the eye testing staffs
                                        were very professional , customs friendly staff, very polite and knowledgeable <span
                                            class="feed-icon ps-2"><i class='bx bxs-quote-right'></i></span>
                                    </div>
                                </div>
                                <div class="feedback">
                                    <div class="feed-img">
                                        <img src="{{ asset('image/feed/yazh.png') }}" alt="">
                                    </div>
                                    <div class="feed-name">yaziniyan R</div>
                                    <div class="feed-desc">
                                        <span class="feed-icon pe-2"><i class='bx bxs-quote-left'></i></span> Frames
                                        quality are fabulous and even more cost effective, There are vast amount of
                                        collections avaliable ranges from coolers to normal frames, Good ambience & nice
                                        customer support, Thank you "MR.Specs" for providing us good quality frames <span
                                            class="feed-icon ps-2"><i class='bx bxs-quote-right'></i></span>
                                    </div>
                                </div>
                                <div class="feedback">
                                    <div class="feed-img">
                                        <img src="{{ asset('image/feed/sunil.png') }}" alt="">
                                    </div>
                                    <div class="feed-name">sunil hari</div>
                                    <div class="feed-desc">
                                        <span class="feed-icon pe-2"><i class='bx bxs-quote-left'></i></span> The Best
                                        Store ❤️ Even Super Power(Uru Sanjay) Buy Specs to Laser Beam <span
                                            class="feed-icon ps-2"><i class='bx bxs-quote-right'></i></span>
                                    </div>
                                </div>
                                <div class="feedback">
                                    <div class="feed-img">
                                        <img src="{{ asset('image/feed/diva.png') }}" alt="">
                                    </div>
                                    <div class="feed-name">Divakar Nandhagopal</div>
                                    <div class="feed-desc">
                                        <span class="feed-icon pe-2"><i class='bx bxs-quote-left'></i></span> Mr.Specs is
                                        best shop for spectacles and lenses. Instead of going to big shop you can visit
                                        Mr.Specs and grab good quality products with less amount. <span
                                            class="feed-icon ps-2"><i class='bx bxs-quote-right'></i></span>
                                    </div>
                                </div>
                                <div class="feedback">
                                    <div class="feed-img">
                                        <img src="{{ asset('image/feed/moni.png') }}" alt="">
                                    </div>
                                    <div class="feed-name">Mohnish Kumar</div>
                                    <div class="feed-desc">
                                        <span class="feed-icon pe-2"><i class='bx bxs-quote-left'></i></span> I'm totally
                                        satisfied of buying this product with affordable cost and good quality
                                        Thank you Mr.Specs 🔥💓 <span class="feed-icon ps-2"><i
                                                class='bx bxs-quote-right'></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection




@push('script')
    <script>
        // -------- navbar scroll -----------
        let prevScrollpos = window.pageYOffset;
        const navbar = document.getElementById('navbar');

        window.onscroll = function() {
            const currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                navbar.style.top = '0';
            } else {
                navbar.style.top = `-${navbar.offsetHeight}px`;
            }
            prevScrollpos = currentScrollPos;
        };


        // ----------- owl carousel -----------

        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                // nav: true,
                items: 3,
                animateIn: 'fadeIn',
                animateOut: 'fadeOut',
                // margin:20,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                autoplaySpeed: 1000,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    600: {
                        items: 2,
                        nav: false
                    },
                    1200: {
                        items: 3
                    }
                }
            });
        })
    </script>
@endpush
