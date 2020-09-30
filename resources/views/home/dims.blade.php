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

            <header class="page-header page-header-light bg-white">
                <div class="page-header-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-lg-10 text-center" data-aos="fade">
                                <h1 class="page-header-title">{{__('dims.title')}}</h1>
                                <picture>
                                    <source srcset="https://avatars2.githubusercontent.com/u/18397124?s=400&u=af81a852ee422154cbeb8fd768e7f0be5cca7efc&v=4" type="image/svg+xml">
                                    <img src="https://avatars2.githubusercontent.com/u/18397124?s=400&u=af81a852ee422154cbeb8fd768e7f0be5cca7efc&v=4" style="border-radius: 50%; height:700px;" class="img-fluid img-thumbnail" alt="...">
                                    <br>
                                    {{__('dims.pic')}}
                                </picture>
                                <p class="page-header-text">{{__('dims.intro')}}</p>
                                <a href="#" data-anchor="#highlights"><button class="btn btn-primary btn-marketing rounded-pill lift lift-sm">Read More</button></a>
                                <button class="btn btn-link btn-marketing rounded-pill">Contact Me</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="svg-border-rounded text-light">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0" /></svg>
                </div>
            </header>
            <section class="bg-light pb-10 pt-1">
                <div class="container">
                    <div class="profile">

                    </div>
                </div>
            </section>
            <section class="bg-light pb-10 pt-0">
                <div class="svg-border-rounded text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0" /></svg>
                </div>
            </section>
            <section class="bg-black py-10">
                <div class="container" id="highlights">
                    <div class="row text-center">
                        <div class="col-lg-4 mb-5 mb-lg-0">
                            <div class="icon-stack icon-stack-xl bg-gradient-primary-to-secondary text-white mb-4"><i data-feather="layers"></i></div>
                            <h3>{{__('dims.sk')}}</h3>
                            <p class="mb-0">{{__('dims.sk-expand')}}</p>
                            <a class="btn-primary btn px-4 ml-lg-4" href="#">Read more<i class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                        <div class="col-lg-4 mb-5 mb-lg-0">
                            <div class="icon-stack icon-stack-xl bg-gradient-primary-to-secondary text-white mb-4"><i data-feather="smartphone"></i></div>
                            <h3>{{__('dims.ca')}}</h3>
                            <p class="mb-0">{{__('dims.ca-expand')}}</p>
                            <a class="btn-primary btn px-4 ml-lg-4" href="#">Read more<i class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                        <div class="col-lg-4">
                            <div class="icon-stack icon-stack-xl bg-gradient-primary-to-secondary text-white mb-4"><i data-feather="code"></i></div>
                            <h3>{{__('dims.edu')}}</h3>
                            <p class="mb-0">{{__('dims.edu-expand')}}</p>
                            <a class="btn-primary btn px-4 ml-lg-4" href="#">Read more<i class="fas fa-arrow-right ml-1"></i></a>

                        </div>
                    </div>
                </div>
            </section>
            <section class="bg-light pt-10">
                <div class="container">
                </div>
                <div class="svg-border-rounded text-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0" /></svg>
                </div>
            </section>
        </main>
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
