@extends('layouts.frontend_master')
@section('home')
    active
@endsection
@section('content')

<!-- slider-area start -->
<div class="slider-area">
    <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide overlay">
                    <div class="single-slider slide-inner slide-inner1">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-lg-9 col-12">
                                    <div class="slider-content">
                                        <div class="slider-shape">
                                            <h2 data-swiper-parallax="-500">Amazing Foods</h2>
                                            <p data-swiper-parallax="-400">Would you like thousands of new customers to taste your amazing food? So would we! It's simple: we list your menu online, help you process orders, pick them up, and deliver them to hungry pandas - in a heartbeat! Interested? Let's start our partnership today! </p>
                                            <a href="#" data-swiper-parallax="-300">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-inner slide-inner7">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-lg-9 col-12">
                                    <div class="slider-content">
                                        <div class="slider-shape">
                                            <h2 data-swiper-parallax="-500">Amazing Foods</h2>
                                            <p data-swiper-parallax="-400">Would you like thousands of new customers to taste your amazing food? So would we! It's simple: we list your menu online, help you process orders, pick them up, and deliver them to hungry pandas - in a heartbeat! Interested? Let's start our partnership today! </p>
                                            <a href="#" data-swiper-parallax="-300">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-inner slide-inner8">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-lg-9 col-12">
                                    <div class="slider-content">
                                        <div class="slider-shape">
                                            <h2 data-swiper-parallax="-500">Amazing Foods</h2>
                                            <p data-swiper-parallax="-400">Would you like thousands of new customers to taste your amazing food? So would we! It's simple: we list your menu online, help you process orders, pick them up, and deliver them to hungry pandas - in a heartbeat! Interested? Let's start our partnership today! </p>
                                            <a href="#" data-swiper-parallax="-300">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- slider-area end -->
    @include('frontend.frontend_includes.category',['categories' => $categories])
    <!-- product-area start -->
    <div class="product-area">
        <div class="fluid-container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Our Latest</h2>
                        {{-- <img src="assets/images/section-title.png" alt=""> --}}
                    </div>
                </div>
            </div>
            <ul class="row">
                @foreach ($products as $product)
                <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                    <div class="product-wrap">
                        <div class="product-img">
                            <span>Sale</span>
                            <img src="{{ asset('/uploads/product_thumbnail') }}/{{ $product->product_thumbnail_photo }}" alt="">
                            <div class="product-icon flex-style">
                                <ul>
                                    <li>
                                    <p><strong>Add To Cart</strong></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="{{  route('product.show',$product->product_slug) }}">{{ $product->product_name }}</a></h3>
                            <p class="pull-left">৳ {{ $product->product_price }}
                            </p>
                            <ul class="pull-right d-flex">
                                @if(review_star_amount($product->id)  == 1)
                                    <li><i class="fa fa-star"></i></li>
                                    @elseif(review_star_amount($product->id)== 2)
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    @elseif(review_star_amount($product->id) == 3)
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    @elseif(review_star_amount($product->id) == 4)
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    @elseif(review_star_amount($product->id) == 5)
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    @else
                                    <li>No Review</li>
                                    @endif
                            </ul>
                        </div>
                    </div>
                </li>
               @endforeach
            </ul>
        </div>
    </div>
    <!-- product-area end -->
    <!-- testmonial-area start -->
    <div class="testmonial-area testmonial-area2 bg-img-5 black-opacity">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="test-title text-center">
                        <h2>What Our client Says</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-1 col-12">
                    <div class="testmonial-active owl-carousel">
                        <div class="test-items test-items2">
                            <div class="test-content">
                                <p>I had an incredible experience working with the brighten talented young minds in many of the events and campaigns. Their innovative approach and creative advancement have always presented an outstanding outcome in challenging tasks. On the whole, the team is more than capable of delivering what you want. I believe they will surpass your expectations</p>
                                <h2>Sarif Neer</h2>
                                <p>National Communication Officer, IOM Bangladesh, UN migration agency</p>
                            </div>
                            <div class="test-img2">
                                <img src="assets/images/test/1.png" alt="">
                            </div>
                        </div>
                        <div class="test-items test-items2">
                            <div class="test-content">
                                <p>Catch Bangladesh is like a Swiss knife in the world of digital & social marketing world. They always come up with a solution no matter how complex the requirement is and them with their creativity. Their agility & adaptability is what that strengthens them with soberness being their Achilles heel. Looking forward to a sustainable professional relation with Catch Bangladesh.</p>
                                <h2>Ramin Ahmed</h2>
                                <p>Managing Partner, Woodhouse Grill</p>
                            </div>
                            <div class="test-img2">
                                <img src="assets/images/test/1.png" alt="">
                            </div>
                        </div>
                        <div class="test-items test-items2">
                            <div class="test-content">
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical LatinContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin</p>
                                <h2>Elizabeth Ayna</h2>
                                <p>CEO of Woman Fedaration</p>
                            </div>
                            <div class="test-img2">
                                <img src="assets/images/test/1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testmonial-area end -->

    @endsection







