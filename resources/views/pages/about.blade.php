@extends('layouts.app')
@section('content')
    <div class="main_about">
        <h1>About Us</h1>
        <div class="container_about">
            <p>Welcome to <span>AutoDoc</span>, your one-stop-shop for all your auto parts needs! Our mission is to provide top-quality auto parts and accessories at affordable prices, combined with outstanding customer service.
                With a vast selection of high-quality automotive parts and accessories, <span>AutoDoc</span> has become a go-to destination for both professional mechanics and car enthusiasts alike. The company has gained a reputation for its extensive product range, competitive prices, and exceptional customer service.
            </p>
            <img class="about_image" src="{{ url('assets/Images/AboutUs.jpg') }}" alt="aboutus">
        </div>
        <div class="container_box">
            <img class="about_image2" src="{{ url('assets/Images/AboutUs2.jpg') }}" alt="aboutus">
            <p>
                <span>AutoDoc's</span> commitment to customer satisfaction extends beyond the point of sale. The company offers warranties on many of its products, providing customers with peace of mind and reassurance regarding their purchases. In the rare event of an issue or a need for returns, <span>AutoDoc</span> has a well-established returns and refund policy in place to handle such situations efficiently and fairly.
                In addition to its wide range of products and competitive pricing, <span>AutoDoc</span> places great emphasis on customer service. The company has a dedicated support team that is available to assist customers with their inquiries, provide technical advice, and guide them through the purchasing process. <span>AutoDoc</span> aims to ensure a seamless experience from order placement to delivery, with fast shipping and reliable logistics partners that deliver autoparts to customers' doorsteps in a timely manner.
            </p>
        </div>
    </div>
    <div class="story_section">
        <h3>Our Story in pictures</h3>
        <div class="card_container_about">
            <img src="{{ url('assets/Images/Story1.jpg') }}" alt="story1">
            <img src="{{ url('assets/Images/Story2.jpg') }}" alt="story2">
            <img src="{{ url('assets/Images/Story3.jpg') }}" alt="story3">
            <img src="{{ url('assets/Images/Story4.jpg') }}" alt="story4">
        </div>
    </div>
@endsection
