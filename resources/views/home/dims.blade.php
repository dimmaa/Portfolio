@extends('layouts.app')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content />
    <meta name="author" content />
    <title>Portfolio</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js" crossorigin="anonymous"></script>
</head>
<body>
<div id="layoutDefault">
    <div id="layoutDefault_content">
        <main>
            <nav class="navbar navbar-marketing navbar-expand-lg bg-dark navbar-light navbar-preview fixed-top">
                <div class="container">
                    <a class="navbar-brand text-primary" href="#"><span style="color: #ffffff;">Daemien</span></a><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i data-feather="menu"></i></button>
                    <div  class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto mr-lg-5" >
                            <li class="nav-item"><a style="color: #ffffff;" class="nav-link" href="#" data-anchor="#about">{{__('nav.sk')}} </a></li>
                            <li class="nav-item"><a style="color: #ffffff;" class="nav-link" href="#" data-anchor="#highlights">{{__('nav.ca')}} </a></li>
                            <li class="nav-item"><a style="color: #ffffff;" class="nav-link" href="#" data-anchor="#contact">{{__('nav.ed')}}</a></li>
                            <li class="nav-item dropdown no-caret">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownDocs" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('nav.la')}}<i class="fas fa-chevron-right dropdown-arrow"></i></a>
                                <div class="dropdown-menu dropdown-menu-right animated--fade-in-up" aria-labelledby="navbarDropdownDocs">
                                    <a class="dropdown-item py-3" href="#" target="_blank"
                                    ><div class="icon-stack bg-primary-soft text-primary mr-4"><i class="fas fa-book-open"></i></div>
                                        <div>
                                            <div class="small text-gray-500">English</div>
                                            EnFlag
                                        </div></a>
                                    <div class="dropdown-divider m-0"></div>
                                    <a class="dropdown-item py-3" href="#" target="_blank">
                                        <div class="icon-stack bg-primary-soft text-primary mr-4"><i class="fas fa-code"></i></div>
                                        <div>
                                            <div class="small text-gray-500">Nederlands</div>
                                            nlFlag
                                        </div></a>
                                    <div class="dropdown-divider m-0"></div>
                                </div>
                            </li>
                        </ul>
                        <a class="btn-danger btn rounded-pill px-4 ml-lg-4" href="https://github.com/dimmaa/Portfolio" target="_blank">See code on Github<i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                </div>
            </nav>

            <header class="page-header page-header-light bg-white">
                <div class="page-header-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-lg-10 text-center" style="padding-top: 90px; "data-aos="fade">
                                <h1 class="page-header-title">{{__('dims.title')}}</h1>
                                <picture>
                                    <source srcset="https://avatars2.githubusercontent.com/u/18397124?s=400&u=af81a852ee422154cbeb8fd768e7f0be5cca7efc&v=4" type="image/svg+xml">
                                    <img src="https://avatars2.githubusercontent.com/u/18397124?s=400&u=af81a852ee422154cbeb8fd768e7f0be5cca7efc&v=4" style="border-radius: 50%; height:700px;" class="img-fluid img-thumbnail" alt="...">
                                    <br>
                                    {{__('dims.pic')}}
                                </picture>
                                <p class="page-header-text">{{__('dims.intro')}}</p>
                                <a href="#" data-anchor="#highlights"><button class="btn btn-primary btn-marketing rounded-pill lift lift-sm">Read More</button></a>
                                <a href="#" data-anchor="#contact"><button class="btn btn-link btn-marketing rounded-pill">Contact Me</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="svg-border-rounded text-light">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0" /></svg>
                </div>
            </header>
            <section class="bg-light pb-10 pt-1" id="about">
                <div class="container">
                    <div class="profile" style="padding-top: 300px;">
                        <div class="row justify-content-center">
                            <h1 class="page-header-title">{{__('dims.about')}}</h1>
                            <p>{{__('dims.profile')}}</p>
                            <p>{{__('dims.profile2')}}</p>
                            <p>{{__('dims.profile3')}}</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="bg-light pb-10 pt-0">
                <div class="svg-border-rounded text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0" /></svg>
                </div>
            </section>


{{--            <section class="bg-black py-10">--}}
{{--                <div class="container">--}}
{{--                    <div class="row text-center">--}}
{{--                        <div class="col-lg-4 mb-5 mb-lg-0">--}}
{{--                            <div class="icon-stack icon-stack-xl bg-gradient-primary-to-secondary text-white mb-4"><i data-feather="layers"></i></div>--}}
{{--                            <h3>{{__('dims.sk')}}</h3>--}}
{{--                            <p class="mb-0">{{__('dims.sk-expand')}}</p>--}}
{{--                            <a class="btn-primary btn px-4 ml-lg-4" href="#">Read more<i class="fas fa-arrow-right ml-1"></i></a>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4 mb-5 mb-lg-0">--}}
{{--                            <div class="icon-stack icon-stack-xl bg-gradient-primary-to-secondary text-white mb-4"><i data-feather="smartphone"></i></div>--}}
{{--                            <h3>{{__('dims.ca')}}</h3>--}}
{{--                            <p class="mb-0">{{__('dims.ca-expand')}}</p>--}}
{{--                            <a class="btn-primary btn px-4 ml-lg-4" href="#">Read more<i class="fas fa-arrow-right ml-1"></i></a>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4">--}}
{{--                            <div class="icon-stack icon-stack-xl bg-gradient-primary-to-secondary text-white mb-4"><i data-feather="code"></i></div>--}}
{{--                            <h3>{{__('dims.edu')}}</h3>--}}
{{--                            <p class="mb-0">{{__('dims.edu-expand')}}</p>--}}
{{--                            <a class="btn-primary btn px-4 ml-lg-4" href="#">Read more<i class="fas fa-arrow-right ml-1"></i></a>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </section>--}}


            <section class="bg-light pt-10">
                <div class="container" id="highlights" style="padding-top: 80px;">
                    <h1 class="justify-content-center text-center">{{__('car.work')}}</h1>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="padding-top: 100px;">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active" style="height: 60vh; ">
                                <img class="d-block w-100" style="height: 100%;"   src="https://lh3.googleusercontent.com/9PTLz2InSxaRrp07tUUjUgr42KZWNEldvo__sNgs5qGnVgcDbHge6hV_y0Xk-WBkmhsg" alt="First slide" style="height: 100%">
                            </div>
                            <div class="carousel-item" style="height: 60vh;">
                                <img class="d-block w-100" style="height: 100%;"  src="https://www.marketing-communicatie-vacatures.nl/uploads/afbeeldingen/vacatures/Bedrijfsprofielen/ProActive%20Software%20Nederland/ProActive%20Software%20Nederland%20banner1.jpg" alt="Second slide" style="height: 100%; border-radius: 20px;">
                            </div>
                            <div class="carousel-item" style="height: 60vh;">
                                <img class="d-block w-100" style="height: 100%;" src="https://docplayer.nl/docs-images/91/107738640/images/7-0.jpg" alt="Third slide" style="height: 100%">
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
                                    <p class="page-header-text">{{__('car.learn-want')}}</p>
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
                            <div class="carousel-item active"style="height: 80vh;" >
                                <img class="d-block w-100 justify-content-center" style="size: auto;" src="https://scontent-amt2-1.cdninstagram.com/v/t51.2885-15/e35/28763426_2150732065157502_6849414935135387648_n.jpg?_nc_ht=scontent-amt2-1.cdninstagram.com&_nc_cat=106&_nc_ohc=-XkTzNL7EfkAX_B4PK_&_nc_tp=18&oh=bdab02d3ed9858f7b9ee3922d479fa56&oe=5F9E440A" alt="First slide">
                            </div>
                            <div class="carousel-item justify-content-center"style="height: 80vh;" >
                                <img class="d-block w-100" style="height: 100%;" src="https://scontent-amt2-1.cdninstagram.com/v/t51.2885-15/e35/28150951_2010479619186899_5334565843688751104_n.jpg?_nc_ht=scontent-amt2-1.cdninstagram.com&_nc_cat=111&_nc_ohc=VZgcqUKpVeYAX_08Nl_&_nc_tp=18&oh=48d2ed80c4622c03892df805464847bc&oe=5F9DDECC" alt="Second slide">
                            </div>
                            <div class="carousel-item justify-content-center justify-content-lg-center"style="height: 80vh;" >
                                <img class="d-block w-100"style="height: 100%;" src="https://scontent-ams4-1.cdninstagram.com/v/t51.2885-15/e35/26864801_553289921730574_5928909851970240512_n.jpg?_nc_ht=scontent-ams4-1.cdninstagram.com&_nc_cat=110&_nc_ohc=M1bnTBDG1eAAX-XAMYw&_nc_tp=18&oh=ccee3965c054997afc6e737b494be42e&oe=5FA08843" alt="Third slide">
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
                    <div class="page-header-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12" data-aos="fade">
                                    <h1 class="em-title">{{__('car.employer2')}}</h1>
                                    <p class="em-defined">{{__('car.ex-em2')}}</p>
                                    <p class="ex-daily">{{__('car.ex-em-daily2')}}</p>
                                    <p class="page-header-text">{{__('car.learned2')}}</p>
                                    <p class="page-header-text">{{__('car.learned-expand2')}}</p>
                                    <p class="page-header-text">{{__('car.learn-want2')}}</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="svg-border-rounded text-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0" /></svg>
                </div>



            </section>
        </main>
    </div>

<div class="container" id="contact">
    <!--Section: Contact v.2-->
    <section class="mb-4">

        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">Neem Contact op met mij</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">Als u vragen heeft, neemt u dan contact op door een mailtje te versturen naar <a href="mailto:daemienho@gmail.com">"daemienho@gmail.com"</a> een telefoontje is wel sneller.</p>

        <div class="row">

            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5">
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>

                @endif
                <form id="contact-form" name="contact-form" action="{{url('sendemail/send')}}" method="post">
                    {{csrf_field()}}

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="name" name="name" class="form-control">
                                <label for="name" class="">Uw naam</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="email" name="email" class="form-control">
                                <label for="email" class="">Uw email</label>
                            </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <input type="text" id="subject" name="subject" class="form-control">
                                <label for="subject" class="">Onderwerp</label>
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">

                            <div class="md-form">
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                <label for="message">Uw bericht</label>
                            </div>

                        </div>
                    </div>
                    <!--Grid row-->

                </form>

                <div class="text-center text-md-left">
                    <input type="submit" name="send" value="Send" class="btn btn-primary">

                </div>
                <div class="status"></div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                    <li><a href="https://goo.gl/maps/yX8oQ7g9tfRGLrLJ8"><i class="fas fa-map-marker-alt fa-2x"></i></a>
                        <p>IJmuiden, 1972 TP Nederland</p>
                    </li>

                    <li><i class="fas fa-phone mt-4 fa-2x"></i>
                        <p>+ 316 112 87 858</p>
                    </li>

                    <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                        <p><a href="mailto:daemienho@gmail.com">daemienho@gmail.com</p></a>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

        </div>

    </section>
    <!--Section: Contact v.2-->
</div>


    <div id="layoutDefault_footer">
        <footer class="footer pt-10 pb-5 mt-auto bg-dark footer-dark">
            <div class="container"></div>
        </footer>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        disable: 'mobile',
        duration: 600,
        once: true
    });
</script>
<script>
    $('[data-anchor]').click(function(e) {
        e.preventDefault();
        var goToAnchor = $(this).attr("data-anchor");
        $('html, body').animate({
            scrollTop: $(goToAnchor).offset().top
        }, 1000);
    });
</script>

<script src="js/sb-customizer.js"></script>
<sb-customizer project="sb-ui-kit-pro"></sb-customizer>
</body>
</html>
