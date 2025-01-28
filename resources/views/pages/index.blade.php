@extends('layouts.app')

@section('content')
    <main>
        <div class="main_text">
            <p>
                At our shop <span class="main_text_red">you can buy</span> <br>
                Anything <span class="main_text_red">you need</span> <br>
                For <span class="main_text_red">for your car!</span> <br>
            </p> <br>
            <button type="button" class="main_text_button">
                <a href="{{ route('about') }}">Learn More</a>
            </button>
        </div>
        <div class="main_image">
            <img id="main_image" src="{{ url('assets/Images/Main Image Section.png') }}" alt="main_image">
        </div>
    </main>
    <div class="featured_brands">
        <p>Featured Brands</p>
        <div class="featured_images">
            <img class="featured_icon" id="bmw_featured" src="{{ url('assets/Images/bmw_featured.png') }}" alt="bmw_featured">
            <img class="featured_icon" id="mercedes_featured" src="{{ url('assets/Images/mercedes_featured.png') }}" alt="mercedes_featured">
            <img class="featured_icon" id="audi_featured" src="{{ url('assets/Images/audi_featured.png') }}" alt="audi_featured">
            <img class="featured_icon" id="toyota_featured" src="{{ url('assets/Images/toyota_featured.png') }}" alt="toyota_featured">
            <img class="featured_icon" id="volkswagen_featured" src="{{ url('assets/Images/volkswagen_featured.png') }}" alt="volkswagen_featured">
            <img class="featured_icon" id="lexus_featured" src="{{ url('assets/Images/lexus_featured.png') }}" alt="lexus_featured">
        </div>
    </div>
    <div class="information">
        <img class="info_img" src="{{ url('assets/Images/Information Image.png') }}" alt="information_image">
        <div class="info_text">
            <p class="info_head">Information</p>
            <p class="info_title">Welcome to our auto parts <span class="text_red">Shop!</span></p>
            <p class="info_txt">We are AutdoDoc. We provide high-quality parts and accessories <br> for all types of vehicles.
                It aims to assist vehicle owners, professional mechanics, <br> and enthusiasts by offering a vast array of information on various aspects of <br>  <span class="text_red">automobile maintenance and repair.</span>
            </p>
            <button class="contact_button"><a href="{{ route('contact') }}">Contact us</a></button>
        </div>
    </div>

    <div class="best_sellers">
        <h3>Products</h3>
        <div class="card_container" id="best_sellers">
            @foreach($products as $product)
                <div class="card">
                    <img class="b_image" src="{{ url('storage/' . $product->image) }}" alt="caroil">
                    <h3>{{ $product->title }}</h3>
                    <p>{{ $product->description }}</p>
                    <p class="price">$ {{ $product->price }}</p>
                </div>
            @endforeach
        </div>
    </div>
    <div class="paginate">
        {{ $products->links('layouts.pagination') }}
    </div>

    @if(request()->has('page'))
        <script>
            window.scroll({
                top: document.querySelector('#best_sellers').offsetTop + 100,
                behavior: 'smooth'
            });
        </script>
    @endif

@endsection
