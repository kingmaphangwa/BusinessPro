@extends('layouts.app')

@section('title', 'Home | BusinessPro')

@section('style')
    body {
        font-family: 'Nunito', sans-serif;
    }

    .jumbotron{
        clear: both;
        overflow: auto;
    }

    .card {
        margin: 10px;
        float: left;
        color: black;
    }

    .card a {
        color: black;
        text-decoration: none;
    }
@endsection

@section('content')
    <div class="jumbotron" id="company-discription">
        <h1>Software, Website, Marketing and Consulting Agancy</h1>
    </div>

    <div class="container">
        <h2> Our Services: </h2>
        <p> Check out how we may help you with our rapid delivery professional services </p>
    </div>

    <div class="jumbotron jumbotron-fluid">

            <div class="card col-md-3 float-left">
                <a href="web-Development">
                        <img class="card-img-top" src="web.jpeg" alt="Card image cap">

                        <div class="card-body">
                            <p class="card-title bold"><b>Web Development</b></p>
                            <p class="card-text small">Get your business/ personal Website Development</p>
                        </div>
                    </a>
                </div>

            <div class="card col-md-3 float-left" >
                <a href="app-Development">
                        <img class="card-img-top" src="app.jpeg" alt="Card image cap">

                        <div class="card-body">
                        <p class="card-title bold"><b>Android/ IOS Appliation<b></p>
                        <p class="card-text small">Get your business/ personal mobile application Development</p>
                        </div>
                    </a>
            </div>

            <div class="card col-md-3 float-left">
                    <a href="graphic-design">
                        <img class="card-img-top" src="graphic.jpeg" alt="Card image cap">

                        <div class="card-body">
                            <p class="card-title bold"><b>Graphic design</b></p>
                            <p class="card-text small">Get your eye catching logo, flyer, letter head, email signature, etc</p>
                        </div>
                    </a>
            </div>

            <div class="card col-md-3 float-left">
                <a href="search-engine-optimisation">
                        <img class="card-img-top" src="seo.jpeg" alt="Card image cap">

                        <div class="card-body">
                            <p class="card-title bold"><b>Search Engine Optimasation</b></p>
                            <p class="card-text small">Optimize your website search engine with us.</p>
                        </div>
                    </a>
            </div>

            <div class="card col-md-3 float-left">
                <a href="email-marketing">
                        <img class="card-img-top" src="email.jpeg" alt="Card image cap">

                        <div class="card-body">
                            <p class="card-title bold"><b>Email Marketing</b></p>
                            <p class="card-text small">Let us help your business with e-mail marketing automation</p>
                        </div>
                    </a>
            </div>
    </div>
@endsection

@section("script")


@endsection