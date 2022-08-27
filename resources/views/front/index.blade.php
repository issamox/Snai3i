@extends("layouts.master")

@section("content")
    <!-- Homepage Banner section -->
    <section>
    </section>

    <section id="home" class="w3l-banner py-5">
        <div class="banner-content">
            <div class="container py-4 HomePageBanner">
                <div class="row align-items-center pt-sm-5 pt-4">
                    <div class="col-md-6">
                        <h3 class="mb-lg-4 mb-3">
                            Your Kids Deserve The<span class="d-block">Best Education</span>
                        </h3>
                        <p class="banner-sub">Active Learning, Expert Teachers &amp; Safe Environment                    </p>
                        <div class="d-flex align-items-center buttons-banner">
                            <a href="#url" class="btn btn-style mt-lg-5 mt-4">Admission Now</a>
                        </div>
                    </div>
                    <div class="col-md-6 right-banner-2 text-end position-relative mt-md-0 mt-5">
                        <div class="sub-banner-image mx-auto">
                            <img src="images/images-banner.png" class="img-fluid position-relative" alt=" ">
                        </div>
                        <div class="banner-style-1 position-absolute">
                            <div class="banner-style-2 position-relative">
                                <h4>Back to School                            </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
    </section>
    <!-- //Homepage Banner section -->


    <!-- HomePage Features -->

    <section>
    </section>

    <section class="services-w3l-block py-5" id="features">
        <div class="container py-md-5 py-4 HomePageFeatures">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <p class="text-uppercase">LISTE DES MÉTIERS</p>
                <h3 class="title-style">Découvrez nos annonces par catégorie</h3>
            </div>

            <div class="row justify-content-center">

                @forelse( $jobs as $job )
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-2">
                        <div class="icon-box w-100 icon-box-clr-1">
                            <div class="icon">
                                <img src="{{ $job->image ? asset("uploads/Admin/Jobs/$job->image") : asset('images/Plomberie.png') }}" alt="">
                            </div>
                            <h4 class="title"><a href='{{ url("/metier/$job->slug") }}'>{{ $job->name }}</a></h4>
                        </div>
                    </div>
                @empty
                    <div>pas de metier</div>
                @endforelse

            </div>

        </div>
    </section>

    <section>
    </section>

    <!-- //HomePage Features -->



    <!-- HomePage about section -->

    <section>
    </section>

    <section class="w3l-servicesblock pt-lg-5 pt-4 pb-5 mb-lg-5" id="about">
        <div class="container pb-md-5 pb-4 HomePageAbout">
            <div class="row pb-xl-5 align-items-center">
                <div class="col-lg-6 position-relative home-block-3-left pb-lg-0 pb-5">
                    <div class="position-relative">
                        <img src="images/images-img1.jpg" alt="" class="img-fluid radius-image">
                    </div>

                    <div class="imginfo__box">
                        <h6 class="imginfo__title">
                            Get a Appointment Today!                    </h6>
                        <p>
                            Nemo enim ipsam oluptatem quia oluptas<br> sit aspernatur aut odit aut fugit.                    </p>
                        <a href="tel:1-800-654-3210"><i class="fas fa-phone-alt"></i>
                            1-800-654-3210</a>
                    </div>

                </div>
                <div class="col-xl-5 col-lg-6 offset-xl-1 mt-lg-0 mt-5 pt-lg-0 pt-5">
                    <h3 class="title-style">
                        We Are The Best Choice For Your Child                </h3>
                    <p class="mt-4">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                        ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing
                        elit.</p>
                    <ul class="mt-4 list-style-lis pt-lg-1">
                        <li><i class="fas fa-check-circle"></i>Special Education                    </li>
                        <li><i class="fas fa-check-circle"></i>Access more then 100K online courses                    </li>
                        <li><i class="fas fa-check-circle"></i>Traditional Academies                    </li>
                    </ul>
                    <a href="#url" class="btn btn-style mt-5">Apply Now</a>
                </div>
            </div>
        </div>
    </section>

    <section>
    </section>

    <!-- HomePage about section -->



    <!-- HomePage Why Choose Us -->

    <section>
    </section>

    <section class="w3l-service-1 py-5">

        <div class="container py-md-5 py-4 HomePageWCU">

            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <p class="text-uppercase">
                    Why Choose Us</p>
                <h3 class="title-style">
                    Tools For Teachers And Learners            </h3>
            </div>

            <div class="row content23-col-2 text-center">
                <div class="col-md-6">
                    <div class="content23-grid content23-grid1">
                        <style>
                            .w3l-service-1 .content23-grid1 {
                                background: url(https://wp.w3layouts.com/eduschool/wp-content/themes/eduschool/assets/images/bg1.jpg);
                            }
                        </style>
                        <h4><a href="#url">Expert Teachers</a>
                        </h4>
                    </div>
                </div>
                <div class="col-md-6 mt-md-0 mt-4">
                    <div class="content23-grid content23-grid2">
                        <style>
                            .w3l-service-1 .content23-grid2 {
                                background: url(https://wp.w3layouts.com/eduschool/wp-content/themes/eduschool/assets/images/bg2.jpg);
                            }
                        </style>
                        <h4><a href="#url">Safe Environment</a>
                        </h4>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <section>
    </section>
    <!-- //Homepage Why Choose Us section -->



    <!-- HomePage Stats section -->

    <section>
    </section>

    <section class="w3-stats pt-4 pb-5" id="stats">
        <div class="container pb-md-5 pb-4 HomePageStats">

            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <p class="text-uppercase">Nos statistiques</p>
                <h3 class="title-style">Nous sommes fiers de partager avec vous</h3>
            </div>

            <div class="row text-center pt-4 justify-content-center">

                <div class="col-md-3 col-6">
                    <div class="counter">
                        <img src="images/images-icon-1.png" alt="" class="img-fluid">
                        <div class="timer count-title count-number mt-sm-1" data-to="36076" data-speed="1500"></div>
                        <p class="count-text">
                            Students Enrolled                    </p>
                    </div>
                </div>

                <div class="col-md-3 col-6">
                    <div class="counter">
                        <img src="images/images-icon-2.png" alt="" class="img-fluid">
                        <div class="timer count-title count-number mt-3" data-to="786" data-speed="1500"></div>
                        <p class="count-text">
                            Our Branches</p>
                    </div>
                </div>

                <div class="col-md-3 col-6 mt-md-0 mt-5">
                    <div class="counter">
                        <img src="images/images-icon-3.png" alt="" class="img-fluid">
                        <div class="timer count-title count-number mt-3" data-to="3630" data-speed="1500"></div>
                        <p class="count-text">
                            Total Courses</p>
                    </div>
                </div>

                <div class="col-md-3 col-6 mt-md-0 mt-5">
                    <div class="counter">
                        <img src="images/images-icon-4.png" alt="" class="img-fluid">
                        <div class="timer count-title count-number mt-3" data-to="6300" data-speed="1500"></div>
                        <p class="count-text">
                            Awards Won</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section>
    </section>

    <!-- /HomePage Stats section -->


    <!-- HomePage Testimonials -->

    <section>
    </section>

    <section class="w3l-index4 py-5" id="testimonials">
        <style>
            .w3l-index4 {
                background: url(https://wp.w3layouts.com/eduschool/wp-content/themes/eduschool/assets/images/bg3.jpg);
            }
        </style>
        <div class="container py-md-5 py-4 HomePageTestimonials">
            <div class="content-slider text-center">
                <div class="clients-slider">
                    <div class="mask">
                        <ul>
                            <li class="anim1">
                                <img src="images/images-testi1.jpg" class="img-fluid rounded-circle" alt="client image">
                                <blockquote class="quote">
                                    <q>Très bon service, Artisan professionnel, honnête et le rapport qualité prix rien à dire. Artisan à l'écoute, très correcte et compétent. Merci à vous Mr et à Bricall </q>
                                </blockquote>
                                <div class="source">- Electroménager </div>
                            </li>
                            <li class="anim2">
                                <img src="images/images-testi2.jpg" class="img-fluid rounded-circle" alt="client image">
                                <blockquote class="quote">
                                    <q>Mr Amhar a été d'une aide tellement précieuse que je le recommande à toutes personnes. Il est d'une compétence irréprochable et d'une gentillesse sans précédent!</q>
                                </blockquote>
                                <div class="source">-  Plombier </div>
                            </li>
                            <li class="anim3">
                                <img src="images/images-testi3.jpg" class="img-fluid rounded-circle " alt="client image">
                                <blockquote class="quote">
                                    <q>Vraiment un travail professionnel et sérieux, bien précis et pointilleux dans ses œuvres et toujours dans les temps, vraiment rien à dire, très content de son travail. Bravo.</q>
                                </blockquote>
                                <div class="source">- Électricien </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
    </section>

    <!-- //HomePage Testimonials -->


    <!-- HomePage Join Number -->

    <section>
    </section>

    <section class="w3l-call-to-action-6">
        <div class="container py-md-5 py-sm-4 py-5 HomePageJoinNumber">
            <div class="d-lg-flex align-items-center justify-content-between">
                <div class="left-content-call">
                    <h3 class="title-big">
                        Call To Enroll Your Child!                </h3>
                    <p class="text-white mt-1">
                        Begin the change today!                </p>
                </div>
                <div class="right-content-call mt-lg-0 mt-4">
                    <ul class="buttons">
                        <li class="phone-sec me-lg-4"><i class="fas fa-phone-volume"></i>
                            <a class="call-style-w3" href="tel:+1(23)%20456%20789%200000">+1(23) 456 789 0000</a>
                        </li>
                        <li><a href="#url" class="btn btn-style btn-style-2 mt-lg-0 mt-3">Join for free</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section>
    </section>

    <!-- //HomePage Join Number -->
@endsection
