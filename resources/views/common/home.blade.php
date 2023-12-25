@extends('template')

@section('head')
    <title>Emerging Vision | {{env('APP_NAME')}}</title>
    <style>
        h2
        {
            font-size: 2.3rem !important;
        }
    </style>
@endsection

@section('body')

<section style="height: 75vh;" class="p-4">
    <div class="w-100 h-100 d-flex align-items-center justify-content-center flex-column">
        <h1 style="font-size: 3rem;" class="text-center">We are here for y<i class="fa-regular fa-circle fa-bounce fa-2xs text-primary" style="position: relative; bottom: -5px; padding-right: 4px;"></i>u.</h1>
        <p class="text-secondary col-md-5 text-center mb-4" style="font-size: 15px;">Bring new trending and helpful programs in your life. With this new year 2024, save your time by using our tools.</p>
        <a href="{{route('tools')}}">
            <button class="btn btn-primary px-4 py-3 rounded-pill">Explore Tools <i class="fa-solid fa-caret-right fa-beat-fade"></i></button>
        </a>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5"><i class="fa-solid fa-fire"></i> &nbsp;Trending T<tag class="text-primary">oo</tag>ls</h2>
        <div class="row m-0 justify-content-center">
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card p-5 text-center border-0" id="toolCard">
                    <i class="fa-brands fa-wordpress fa-4x"></i>
                    <div class="text-center mt-4">
                        <a href="{{route('wptosql')}}" class="stretched-link" target="_blank">SQL Queries For WordPress</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card p-5 text-center border-0" id="toolCard">
                    <i class="fa-solid fa-wallet fa-4x"></i>
                    <div class="text-center mt-4">
                        <a href="{{route('emicalculator')}}" class="stretched-link" target="_blank">EMI Calculator</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card p-5 text-center border-0" id="toolCard">
                    <i class="fa-solid fa-percent fa-4x"></i>
                    <div class="text-center mt-4">
                        <a href="{{route('cgpatopercentage')}}" class="stretched-link" target="_blank">CGPA To Percentage</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card p-5 text-center border-0" id="toolCard">
                    <i class="fa-solid fa-ruler-combined fa-4x"></i>
                    <div class="text-center mt-4">
                        <a href="{{route('landunit')}}" class="stretched-link" target="_blank">Land Unit Calculator</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="p-5 mt-5">
    <div class="container bg-light p-4 rounded-5">
        <div class="d-md-flex align-items-center">
            <div class="text-center">
                <img src="/assets/developer.jpeg" alt="" style="height: 200px; width: 200px; object-fit: cover; border-radius: 50%;">
            </div>
            <div class="px-md-3 mt-lg-0 mt-4">
                <h3 class="text-dark">Meet the <tag class="text-primary">developer</tag></h3>
                <p class="text-secondary" style="font-size: 14px;">Hello, I'm Abhishek Arya, a Full-Stack Web Developer with a passion for creating digital experiences. Currently, I serve as a Full-Stack Web Developer, and I lead a team of talented developers, manage web projects, and ensure seamless communication with our valued clients. My journey in the world of web development has been a continuous learning curve. Every project I work on not only sharpens my skills but also adds value to my professional growth. My toolbox includes Laravel, MySQL, PHP, ReactJS, Node, Bootstrap, jQuery, and the fundamentals of HTML, CSS, and JavaScript. </p>
                <div class="d-flex align-items-center">
                    <div class="ps-3 text-secondary primaryanchor">
                        <a href="https://www.facebook.com/twister.abhishek" target="blank_" data-bs-toggle="tooltip" title="Facebook"><i class="fa-brands fa-facebook fa-xl"></i></a>
                    </div>
                    <div class="ps-3 text-secondary primaryanchor">
                        <a href="https://www.instagram.com/twister.abhishek/" target="blank_" data-bs-toggle="tooltip" title="Instagram"><i class="fa-brands fa-instagram fa-xl"></i></a>
                    </div>
                    <div class="ps-3 text-secondary primaryanchor">
                        <a href="https://www.linkedin.com/in/aryabhishek/" target="blank_" data-bs-toggle="tooltip" title="LinkedIn"><i class="fa-brands fa-linkedin fa-xl"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection