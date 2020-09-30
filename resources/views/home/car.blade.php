@extends('layouts.app')
<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="padding-top: 100px;">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" style="height: 70vh; width:100%">
                <img class="d-block w-100" src="https://lh3.googleusercontent.com/9PTLz2InSxaRrp07tUUjUgr42KZWNEldvo__sNgs5qGnVgcDbHge6hV_y0Xk-WBkmhsg" alt="First slide" style="height: 100%">
                <a href="#" data-anchor="#highlights"><button class="btn btn-primary btn-marketing rounded-pill lift lift-sm">Read More</button></a>

            </div>
            <div class="carousel-item" style="height: 70vh; width: 100%">
                <img class="d-block w-100" src="https://www.marketing-communicatie-vacatures.nl/uploads/afbeeldingen/vacatures/Bedrijfsprofielen/ProActive%20Software%20Nederland/ProActive%20Software%20Nederland%20banner1.jpg" alt="Second slide" style="height: 100%; border-radius: 20px;">
            </div>
            <div class="carousel-item" style="height: 70vh; width: 100%">
                <img class="d-block w-100" src="https://docplayer.nl/docs-images/91/107738640/images/7-0.jpg" alt="Third slide" style="height: 100%">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br>
    <div class="page-header-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" data-aos="fade">
                    <h1 class="em-title">{{__('car.employer')}}</h1>
                    <p class="em-defined">{{__('car.ex-em')}}</p>
                    <p class="ex-daily">{{__('car.ex-em-daily')}}</p>
                    <p class="page-header-text">{{__('car.learned')}}</p>
                    <p class="page-header-text">{{__('car.learned-expand')}}</p>
                    <a href="#" data-anchor="#highlights-proactive"><button class="btn btn-primary btn-marketing rounded-pill lift lift-sm">Read More</button></a>
                </div>

            </div>
        </div>
    </div>
    <br>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://scontent-lga3-2.cdninstagram.com/v/t51.2885-15/e35/27890837_148531495844789_8221316382415912960_n.jpg?_nc_ht=scontent-lga3-2.cdninstagram.com&_nc_cat=105&_nc_ohc=lqHQLm_4fxEAX-b3Aoc&_nc_tp=18&oh=961f34fa3b55ced82e9d888e59866f5c&oe=5F9D861B" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="..." alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="..." alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
