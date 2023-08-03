@extends('website.master')
@section('title')
    Home
@endsection
@section('body')
    <main class="main-wrapper">

        <div class="axil-main-slider-area main-slider-style-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-sm-6">
                        <div class="main-slider-content">
                            <div class="slider-content-activation-one">
                                @foreach ($sliders as $item)
                                    <div class="single-slide slick-slide" data-sal="slide-up" data-sal-delay="400"
                                        data-sal-duration="800">
                                        <span class="subtitle"><i class="fas fa-fire"></i> Hot Deal In This Week</span>
                                        <h1 class="title">{{$item->name}}</h1>
                                        <div class="slide-action">
                                            <div class="shop-btn">
                                                <a href="shop.html" class="axil-btn btn-bg-white"><i
                                                        class="fal fa-shopping-cart"></i>Shop Now</a>
                                            </div>
                                            <div class="item-rating">
                                                <div class="thumb">
                                                    <ul>
                                                        <li><img src="{{ asset('website') }}/assets/images/others/author1.png"
                                                                alt="Author"></li>
                                                        <li><img src="{{ asset('website') }}/assets/images/others/author2.png"
                                                                alt="Author"></li>
                                                        <li><img src="{{ asset('website') }}/assets/images/others/author3.png"
                                                                alt="Author"></li>
                                                        <li><img src="{{ asset('website') }}/assets/images/others/author4.png"
                                                                alt="Author"></li>
                                                    </ul>
                                                </div>
                                                <div class="content">
                                                    <span class="rating-icon">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fal fa-star"></i>
                                                    </span>
                                                    <span class="review-text">
                                                        <span>100+</span> Reviews
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-6">
                        <div class="main-slider-large-thumb">
                            <div class="slider-thumb-activation-one axil-slick-dots">
                                @foreach ($sliders as $item)
                                    <div class="single-slide slick-slide" data-sal="slide-up" data-sal-delay="600"
                                        data-sal-duration="1500">
                                        <img src="{{ asset($item->image) }}"
                                            alt="Product">
                                        {{-- <div class="product-price">
                                            <span class="text">From</span>
                                            <span class="price-amount">$49.00</span>
                                        </div> --}}
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group">
                <li class="shape-1"><img src="{{ asset('website') }}/assets/images/others/shape-1.png" alt="Shape">
                </li>
                <li class="shape-2"><img src="{{ asset('website') }}/assets/images/others/shape-2.png" alt="Shape">
                </li>
            </ul>
        </div>

        <!-- Start Categorie Area  -->
        <div class="axil-categorie-area bg-color-white axil-section-gapcommon">
            <div class="container">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-secondary"> <i class="far fa-tags"></i> Categories</span>
                    <h2 class="title">Browse by Brand</h2>
                </div>
                <div class="categrie-product-activation slick-layout-wrapper--15 axil-slick-arrow  arrow-top-slide">
                    @foreach ($brands as $brand)
                        <div class="slick-single-layout">

                            <div class="categrie-product" data-sal="zoom-out" data-sal-delay="200" data-sal-duration="500">
                                <a href="{{ route('brand.shop', ['name' => $brand->brand_name]) }}">
                                    <img class="img-fluid" src="{{ asset($brand->image) }}" alt="product categorie">
                                    <h6 class="cat-title">{{ $brand->brand_name }} </h6>
                                </a>
                            </div>
                            <!-- End .categrie-product -->
                        </div>
                        <!-- End .slick-single-layout -->
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End Categorie Area  -->
        <!-- Start Most Sold Product Area  -->
        <div class="axil-most-sold-product axil-section-gap">
            <div class="container">
                <div class="product-area">
                    <div class="section-title-wrapper section-title-center">
                        <span class="title-highlighter highlighter-primary"><i class="fas fa-star"></i> Most Sold</span>
                        <h2 class="title">Most Sold in eTrade Store</h2>
                    </div>
                    <div class="row row-cols-xl-2 row-cols-1 row--15 ">
                        @foreach ($products as $product)
                            <div class="col ">
                                <div class="axil-product-list">
                                    <div class="thumbnail">
                                        <a href="{{ route('details', ['slug' => $product->slug]) }}">
                                            <span
                                                class="badge sk-fade-bottom badge-lg badge-purple badge-pill badge-float bottom-0 left-0 mb-4 ms-4 bg-dark">
                                                <span class=""
                                                    style="font-size:15px">{{ $product->status == 1 ? 'Brand New' : 'Recondition' }}</span>
                                            </span>
                                            <img data-sal="zoom-in" data-sal-delay="100" data-sal-duration="1500 "
                                                src="{{ asset($product->image) }}" alt="Yantiti Leather Bags">
                                        </a>

                                    </div>
                                    <div class="product-content">

                                        <h6 class="product-title"><a
                                                href="{{ route('details', ['slug' => $product->slug]) }}">
                                                <h5>{{ $product->name }}</h5>
                                            </a></h6>
                                        <div class="product-price-variant">
                                            <span
                                                class="price current-price bg-primary p-3
                                            "
                                                style="color:white;border-radius: 10px">৳{{ $product->price }}</span>
                                        </div>
                                        <div class="product-cart">
                                            <a href="wishlist.html" class="cart-btn"><i class="fal fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- End Most Sold Product Area  -->

        {{-- <!-- Poster Countdown Area  -->
        <div class="axil-poster-countdown">
            <div class="container">
                <div class="poster-countdown-wrap bg-lighter">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6">
                            <div class="poster-countdown-content">
                                <div class="section-title-wrapper">
                                    <span class="title-highlighter highlighter-secondary"> <i
                                            class="fal fa-headphones-alt"></i> Don’t Miss!!</span>
                                    <h2 class="title">Enhance Your Music Experience</h2>
                                </div>
                                <div class="poster-countdown countdown mb--40"></div>
                                <a href="#" class="axil-btn btn-bg-primary">Check it Out!</a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6">
                            <div class="poster-countdown-thumbnail">
                                <img src="{{ asset('website') }}/assets/images/product/poster/poster-03.png"
                                    alt="Poster Product">
                                <div class="music-singnal">
                                    <div class="item-circle circle-1"></div>
                                    <div class="item-circle circle-2"></div>
                                    <div class="item-circle circle-3"></div>
                                    <div class="item-circle circle-4"></div>
                                    <div class="item-circle circle-5"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Poster Countdown Area  --> --}}

        <!-- Start New Arrivals Product Area  -->
        <div class="axil-new-arrivals-product-area bg-color-white axil-section-gap pb--0">
            <div class="container">
                <div class="product-area pb--50">
                    <div class="section-title-wrapper">
                        <span class="title-highlighter highlighter-primary"><i class="far fa-shopping-basket"></i>This
                            Week’s</span>
                        <h2 class="title">BRAND NEW </h2>
                    </div>
                    <div
                        class="new-arrivals-product-activation slick-layout-wrapper--30 axil-slick-arrow  arrow-top-slide">
                        @foreach ($newcars as $item)
                            <div class="slick-single-layout">
                                <div class="axil-product product-style-two">
                                    <div class="thumbnail">
                                        <a href="{{ route('details', ['slug' => $item->slug]) }}">
                                            <img data-sal="zoom-out" data-sal-delay="200" data-sal-duration="500"
                                                src="{{ asset($item->image) }}" alt="Product Images">
                                        </a>
                                        <div class="label-block label-right">
                                            <div class="product-badget">Brand New</div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="inner">
                                            <div class="product-rating">
                                                <span class="icon">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </span>
                                                <span class="rating-number">(64)</span>
                                            </div>
                                            <h5 class="title"><a
                                                    href="{{ route('details', ['slug' => $item->slug]) }}">{{ $item->name }}</a>
                                            </h5>
                                            <div class="product-price-variant">
                                                <span class="price current-price">BDT {{ $item->price }}</span>
                                            </div>
                                            {{-- <div class="product-hover-action">
                                                <ul class="cart-action">
                                                    <li class="select-option"><a href="single-product.html">Add to
                                                            Cart</a>
                                                    </li>
                                                </ul>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- End .slick-single-layout -->

                    </div>
                </div>
            </div>
        </div>
        <!-- End New Arrivals Product Area  -->

        <!-- Start Expolre Product Area  -->
        <div class="axil-product-area bg-color-white axil-section-gap">
            <div class="container">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-primary"> <i class="far fa-shopping-basket"></i> Our
                        Products</span>
                    <h2 class="title">RECONDITION</h2>
                </div>
                <div
                    class="explore-product-activation slick-layout-wrapper slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide">
                    <div class="slick-single-layout">
                        <div class="row row--15">
                            @foreach ($reconditioncars as $item)
                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                                    <div class="axil-product product-style-one">

                                        <div class="thumbnail">
                                            <a href="{{ route('details', ['slug' => $item->slug]) }}">
                                                <img data-sal="zoom-out" data-sal-delay="200" data-sal-duration="800"
                                                    loading="lazy" class="main-img" src="{{ asset($item->image) }}"
                                                    alt="Product Images">
                                                {{-- <img class="hover-img"
                                                src="{{ asset('website') }}/assets/images/product/electric/product-08.png"
                                                alt="Product Images"> --}}
                                            </a>
                                            {{-- <div class="label-block label-right">
                                            <div class="product-badget">20% Off</div>
                                        </div> --}}
                                            <div class="product-hover-action">
                                                <ul class="cart-action">
                                                    {{-- <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a>
                                                </li> --}}
                                                    <li class="select-option">
                                                        <a href="{{ route('details', ['slug' => $item->slug]) }}">
                                                            Recondition
                                                        </a>
                                                    </li>
                                                    {{-- <li class="wishlist"><a href="wishlist.html"><i
                                                            class="far fa-heart"></i></a></li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="inner">
                                                <div class="product-rating">
                                                    <span class="icon">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                                    <span class="rating-number">(64)</span>
                                                </div>
                                                <h5 class="title"><a
                                                        href="{{ route('details', ['slug' => $item->slug]) }}">{{ $item->name }}</a>
                                                </h5>
                                                <div class="product-price-variant">
                                                    <span class="price current-price">BDT {{ $item->price }}</span>
                                                    {{-- <span class="price old-price">$49.99</span> --}}
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            @endforeach
                            <!-- End Single Product  -->
                        </div>
                    </div>
                    <!-- End .slick-single-layout -->
                </div>

            </div>
        </div>
        <!-- End Expolre Product Area  -->


        <!-- Start Testimonila Area  -->
        <div class="axil-testimoial-area axil-section-gap bg-vista-white">
            <div class="container">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-secondary"> <i
                            class="fal fa-quote-left"></i>Testimonials</span>
                    <h2 class="title">Users Feedback</h2>
                </div>
                <!-- End .section-title -->
                <div
                    class="testimonial-slick-activation testimonial-style-one-wrapper slick-layout-wrapper--20 axil-slick-arrow arrow-top-slide">
                    <div class="slick-single-layout testimonial-style-one">
                        <div class="review-speech">
                            <p>“ It’s amazing how much easier it has been to
                                meet new people and create instantly non
                                connections. I have the exact same personal
                                the only thing that has changed is my mind
                                set and a few behaviors. “</p>
                        </div>
                        <div class="media">
                            <div class="thumbnail">
                                <img src="{{ asset('website') }}/assets/images/testimonial/image-1.png"
                                    alt="testimonial image">
                            </div>
                            <div class="media-body">
                                <span class="designation">Head Of Idea</span>
                                <h6 class="title">James C. Anderson</h6>
                            </div>
                        </div>
                        <!-- End .thumbnail -->
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout testimonial-style-one">
                        <div class="review-speech">
                            <p>“ It’s amazing how much easier it has been to
                                meet new people and create instantly non
                                connections. I have the exact same personal
                                the only thing that has changed is my mind
                                set and a few behaviors. “</p>
                        </div>
                        <div class="media">
                            <div class="thumbnail">
                                <img src="{{ asset('website') }}/assets/images/testimonial/image-2.png"
                                    alt="testimonial image">
                            </div>
                            <div class="media-body">
                                <span class="designation">Head Of Idea</span>
                                <h6 class="title">James C. Anderson</h6>
                            </div>
                        </div>
                        <!-- End .thumbnail -->
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout testimonial-style-one">
                        <div class="review-speech">
                            <p>“ It’s amazing how much easier it has been to
                                meet new people and create instantly non
                                connections. I have the exact same personal
                                the only thing that has changed is my mind
                                set and a few behaviors. “</p>
                        </div>
                        <div class="media">
                            <div class="thumbnail">
                                <img src="{{ asset('website') }}/assets/images/testimonial/image-3.png"
                                    alt="testimonial image">
                            </div>
                            <div class="media-body">
                                <span class="designation">Head Of Idea</span>
                                <h6 class="title">James C. Anderson</h6>
                            </div>
                        </div>
                        <!-- End .thumbnail -->
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout testimonial-style-one">
                        <div class="review-speech">
                            <p>“ It’s amazing how much easier it has been to
                                meet new people and create instantly non
                                connections. I have the exact same personal
                                the only thing that has changed is my mind
                                set and a few behaviors. “</p>
                        </div>
                        <div class="media">
                            <div class="thumbnail">
                                <img src="{{ asset('website') }}/assets/images/testimonial/image-2.png"
                                    alt="testimonial image">
                            </div>
                            <div class="media-body">
                                <span class="designation">Head Of Idea</span>
                                <h6 class="title">James C. Anderson</h6>
                            </div>
                        </div>
                        <!-- End .thumbnail -->
                    </div>
                    <!-- End .slick-single-layout -->

                </div>
            </div>
        </div>
        <!-- End Testimonila Area  -->

        <!-- Start Why Choose Area  -->
        <div class="axil-why-choose-area pb--50 pb_sm--30">
            <div class="container">
                <div class="section-title-wrapper section-title-center">
                    <span class="title-highlighter highlighter-secondary"><i class="fal fa-thumbs-up"></i>Why Us</span>
                    <h2 class="title">Why People Choose Us</h2>
                </div>
                <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 row--20">
                    <div class="col">
                        <div class="service-box">
                            <div class="icon">
                                <img src="{{ asset('website') }}/assets/images/icons/service6.png" alt="Service">
                            </div>
                            <h6 class="title">Fast &amp; Secure Delivery</h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="service-box">
                            <div class="icon">
                                <img src="{{ asset('website') }}/assets/images/icons/service7.png" alt="Service">
                            </div>
                            <h6 class="title">100% Guarantee On Product</h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="service-box">
                            <div class="icon">
                                <img src="{{ asset('website') }}/assets/images/icons/service8.png" alt="Service">
                            </div>
                            <h6 class="title">24 Hour Return Policy</h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="service-box">
                            <div class="icon">
                                <img src="{{ asset('website') }}/assets/images/icons/service9.png" alt="Service">
                            </div>
                            <h6 class="title">24 Hour Return Policy</h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="service-box">
                            <div class="icon">
                                <img src="{{ asset('website') }}/assets/images/icons/service10.png" alt="Service">
                            </div>
                            <h6 class="title">Next Level Pro Quality</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Why Choose Area  -->


        <!-- Start Axil Product Poster Area  -->
        <div class="axil-poster">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb--30">
                        <div class="single-poster">
                            <a href="shop.html">
                                <img src="{{ asset('website') }}/assets/images/product/poster/poster-01.png"
                                    alt="eTrade promotion poster">
                                <div class="poster-content">
                                    <div class="inner">
                                        <h3 class="title">Rich sound, <br> for less.</h3>
                                        <span class="sub-title">Collections <i class="fal fa-long-arrow-right"></i></span>
                                    </div>
                                </div>
                                <!-- End .poster-content -->
                            </a>
                        </div>
                        <!-- End .single-poster -->
                    </div>
                    <div class="col-lg-6 mb--30">
                        <div class="single-poster">
                            <a href="shop-sidebar.html">
                                <img src="{{ asset('website') }}/assets/images/product/poster/poster-02.png"
                                    alt="eTrade promotion poster">
                                <div class="poster-content content-left">
                                    <div class="inner">
                                        <span class="sub-title">50% Offer In Winter</span>
                                        <h3 class="title">Get VR <br> Reality Glass</h3>
                                    </div>
                                </div>
                                <!-- End .poster-content -->
                            </a>
                        </div>
                        <!-- End .single-poster -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Axil Product Poster Area  -->

        <!-- Start Axil Newsletter Area  -->
        <div class="axil-newsletter-area axil-section-gap pt--0">
            <div class="container">
                <div class="etrade-newsletter-wrapper bg_image bg_image--5">
                    <div class="newsletter-content">
                        <span class="title-highlighter highlighter-primary2"><i
                                class="fas fa-envelope-open"></i>Newsletter</span>
                        <h2 class="title mb--40 mb_sm--30">Get weekly update</h2>
                        <div class="input-group newsletter-form">
                            <div class="position-relative newsletter-inner mb--15">
                                <input placeholder="example@gmail.com" type="text">
                            </div>
                            <button type="submit" class="axil-btn mb--15">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .container -->
        </div>
        <!-- End Axil Newsletter Area  -->

    </main>


    <div class="service-area">
        <div class="container">
            <div class="row row-cols-xl-4 row-cols-sm-2 row-cols-1 row--20">
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="{{ asset('website') }}/assets/images/icons/service1.png" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">Fast &amp; Secure Delivery</h6>
                            <p>Tell about your service.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="{{ asset('website') }}/assets/images/icons/service2.png" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">Money Back Guarantee</h6>
                            <p>Within 10 days.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="{{ asset('website') }}/assets/images/icons/service3.png" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">24 Hour Return Policy</h6>
                            <p>No question ask.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box service-style-2">
                        <div class="icon">
                            <img src="{{ asset('website') }}/assets/images/icons/service4.png" alt="Service">
                        </div>
                        <div class="content">
                            <h6 class="title">Pro Quality Support</h6>
                            <p>24/7 Live support.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
