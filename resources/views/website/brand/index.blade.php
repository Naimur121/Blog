@extends('website.master')
@section('title')
    Brand
@endsection

@section('body')
    <!doctype html>
    <html lang="en">

    <!-- Mirrored from transvelo.github.io/skola-html/5.1/course-list-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jul 2023 10:19:37 GMT -->
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.png">

        <!-- Font -->
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css2?family=Fredoka+One&amp;family=Lora:wght@400;700&amp;family=Montserrat:wght@400;500;600;700&amp;family=Nunito:wght@400;700&amp;display=swap"
            rel="stylesheet">

        <!-- Libs CSS -->
        <link rel="stylesheet" href="{{ asset('website') }}/category/assets/fonts/fontawesome/fontawesome.css">
        <link rel="stylesheet"
            href="{{ asset('website') }}/category/assets/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.css">
        <link rel="stylesheet" href="{{ asset('website') }}/category/assets/libs/aos/dist/aos.css">
        <link rel="stylesheet"
            href="{{ asset('website') }}/category/assets/libs/choices.js/public/assets/styles/choices.min.css">
        <link rel="stylesheet" href="{{ asset('website') }}/category/assets/libs/flickity-fade/flickity-fade.css">
        <link rel="stylesheet" href="{{ asset('website') }}/category/assets/libs/flickity/dist/flickity.min.css">
        <link rel="stylesheet" href="{{ asset('website') }}/category/assets/libs/highlightjs/styles/vs2015.css">
        <link rel="stylesheet" href="{{ asset('website') }}/category/assets/libs/jarallax/dist/jarallax.css">
        <link rel="stylesheet" href="{{ asset('website') }}/category/assets/libs/quill/dist/quill.core.css" />

        <!-- Map -->
        <link href='../../../api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css' rel='stylesheet' />

        <!-- Theme CSS -->
        <link rel="stylesheet" href="{{ asset('website') }}/category/assets/css/theme.min.css">

        <title>Skola</title>

    </head>

    <body class="bg-white">

        <!-- COURSE LIST V1
                                            ================================================== -->

        <div class="container  pb-4 pb-xl-7">
            <div class="row row-cols-md-2 row-cols-xl-3 mb-6 mb-xl-3">
                @foreach ($datas as $data)
                    <div class="col-md pb-4 pb-md-7">
                        <!-- Card -->
                        <div class="card border  shadow p-2 lift sk-fade">
                            <!-- Image -->
                            @foreach ($data->brands as $brand)
                                <div class="card-zoom position-relative">
                                    <a href="{{route('details',['slug'=>$data->slug])}}" class="card-img sk-thumbnail d-block">
                                        <img class="rounded shadow-light-lg" src="{{ asset($data->image) }}"
                                            alt="...">
                                    </a>
                                    <span class="badge sk-fade-bottom badge-lg badge-purple badge-pill badge-float bottom-0 left-0 mb-4 ms-4 bg-dark">
                                        <span class="" style="font-size:15px">{{$data->status==1? 'Brand New':'Recondition'}}</span>
                                    </span>
                                </div>
                                <!-- Footer -->
                                <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                                    <a href="{{route('details',['slug'=>$data->slug])}}" class="">
                                        <div
                                            class="avatar avatar-xl sk-fade-right badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">

                                            <img src="{{ asset($brand->image) }}" alt="..."
                                                class="avatar-img rounded-circle">

                                        </div>
                                    </a>

                                    <!-- Preheading -->

                                    <a href="{{route('details',['slug'=>$data->slug])}}">
                                        <h3>{{ $brand->brand_name }}</h3>
                                    </a>

                                    <!-- Heading -->
                                    <div class="position-relative">
                                        <a href="{{route('details',['slug'=>$data->slug])}}" class="d-block stretched-link">
                                            <h1 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">
                                                {{ $data->name }}</h1>
                                        </a>

                                        <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                            <h1>
                                                <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                                    <div class="rating" style="width:50%;"></div>
                                                </div>
                                            </h1>

                                            <div class="font-size-sm">
                                                <span>
                                                    <h4>5.45 (5.8k+ reviews)</h4>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row mx-n2 align-items-end">
                                            <div class="col-auto px-2 text-right">
                                                <ins class="h4 mb-0 d-block mb-lg-n1">
                                                    <h1>${{ $data->price }}</h1>
                                                </ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>



        <!-- FOOTER
                                            ================================================== -->



        <!-- JAVASCRIPT
                                            ================================================== -->
        <!-- Libs JS -->
        <script src="{{ asset('website') }}/category/assets/libs/jquery/dist/jquery.min.js"></script>
        <script src="{{ asset('website') }}/category/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('website') }}/category/assets/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.js"></script>
        <script src="{{ asset('website') }}/category/assets/libs/aos/dist/aos.js"></script>
        <script src="{{ asset('website') }}/category/assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
        <script src="{{ asset('website') }}/category/assets/libs/countup.js/dist/countUp.min.js"></script>
        <script src="{{ asset('website') }}/category/assets/libs/dropzone/dist/min/dropzone.min.js"></script>
        <script src="{{ asset('website') }}/category/assets/libs/flickity/dist/flickity.pkgd.min.js"></script>
        <script src="{{ asset('website') }}/category/assets/libs/flickity-fade/flickity-fade.js"></script>
        <script src="{{ asset('website') }}/category/assets/libs/highlightjs/highlight.pack.min.js"></script>
        <script src="{{ asset('website') }}/category/assets/libs/imagesloaded/imagesloaded.pkgd.min.js"></script>
        <script src="{{ asset('website') }}/category/assets/libs/isotope-layout/dist/isotope.pkgd.min.js"></script>
        <script src="{{ asset('website') }}/category/assets/libs/jarallax/dist/jarallax.min.js"></script>
        <script src="{{ asset('website') }}/category/assets/libs/jarallax/dist/jarallax-video.min.js"></script>
        <script src="{{ asset('website') }}/category/assets/libs/jarallax/dist/jarallax-element.min.js"></script>
        <script src="{{ asset('website') }}/category/assets/libs/parallax-js/dist/parallax.min.js"></script>
        <script src="{{ asset('website') }}/category/assets/libs/quill/dist/quill.min.js"></script>
        <script src="{{ asset('website') }}/category/assets/libs/smooth-scroll/dist/smooth-scroll.min.js"></script>
        <script src="{{ asset('website') }}/category/assets/libs/typed.js/lib/typed.min.js"></script>

        <!-- Map -->
        <script src='../../../api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>

        <!-- Theme JS -->
        <script src="assets/js/theme.min.js"></script>


    </body>

    <!-- Mirrored from transvelo.github.io/skola-html/5.1/course-list-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jul 2023 10:19:38 GMT -->

    </html>
@endsection
