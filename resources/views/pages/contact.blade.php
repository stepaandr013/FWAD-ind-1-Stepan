@extends('layouts.app')
@section('content')
    <div class="main_contact">
        <h1>Contact Us</h1>
        <div class="container_contact">
            <div class="contact">
                <img src="{{ url('assets/Images/contact_map.png') }}" alt="contact_map">
                <p><span>Address</span>: Bucovinei St 5/2, Chisinau 2075</p>
                <p><span>Hours</span>: 10:00 - 18:00, 7/7</p>
            </div>
            <div class="contact">
                <img src="{{ url('assets/Images/contact_phone.png') }}" alt="contact_phone">
                <p><span>Phone</span>: 060546022</p>
                <p><span>Email</span>: autodoc@gmail.com</p>
            </div>
        </div>
        <div class="burger">
            <p>Contact Us</p>
            <p>We appreciate your interest and value your feedback. If you have any questions, suggestions, or concerns, please don't hesitate to reach out to us. Our dedicated team is here to assist you and provide the necessary support.</p>
            <p>Contact Information:</p>
            <p>Customer Support: For any inquiries or assistance regarding our products or services, please contact our friendly customer support team. They are available to help you from Monday to Friday, between 9:00 AM and 6:00 PM (local time).</p>
        </div>
        <div class="hr"></div>
    </div>
@endsection
