@extends('layouts.web')
@section('title', 'Home: Kashyap Consultancy Services')
@section('content')
    <header id="home">
        <video src="assets/kyn-ai-landing-hero.mp4" autoplay loop muted></video>
        <div class="overlay">
            <h1>Kashyap Consultancy Services</h1>
            <p>Empowering Your Success: Expert Consultancy for Business Growth and Innovation</p>
            <a href="" class="btn-cta">Get Started</a>
        </div>
    </header>
    <section id="services">
        <div class="row mt-100">
            <div class="col">
                <span class="heading">Our Services</span>
            </div>
        </div>
        <div class="card-holder">
            <div class="card mt-100">
                <img class="main-img" src="assets/image_0429.png" alt="card-header-img">
                <div class="card-heading">Management and Support Services</div>
                <div class="card-description">Optimising daily operations with scalable administrative support, resource management, and strategic oversight to drive business growth.</div>
                <div class="card-action mt-100">
                    <a href="">Read more</a>
                </div>
            </div>
            <div class="card mt-100">
                <img class="main-img" src="assets/image_0430.png" alt="card-header-img">
            </div>
            <div class="card mt-100">
                <img class="main-img" src="assets/image_0431.png" alt="card-header-img">
            </div>
        </div>
    </section>
@endsection