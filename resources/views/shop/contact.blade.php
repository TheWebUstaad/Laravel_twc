@extends('shop.layout')

@section('content')


<div class="container my-5">
    <h1 class="text-center mb-4">Contact Us</h1>

    <form class="mx-auto" style="max-width: 500px;">
        <input type="text" class="form-control mb-3" placeholder="Your Name">
        <input type="email" class="form-control mb-3" placeholder="Your Email">
        <textarea class="form-control mb-3" placeholder="Your Message"></textarea>
        <button class="btn btn-primary w-100">Send Message</button>
    </form>

    <div class="text-center mt-4">
        <p>Email: info@toystore.com</p>
        <p>Phone: +92 300 0000000</p>
    </div>
</div>

@endsection