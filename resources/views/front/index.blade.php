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
                <p class="text-uppercase">
                    Best Features</p>
                <h3 class="title-style">
                    Achieve Your Goals With Edu School
                </h3>
            </div>

            <div class="row justify-content-center">

                @forelse( $jobs as $job )
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-2">
                        <div class="icon-box w-100 icon-box-clr-1">
                            <div class="icon">
                                <img src="{{ asset('images/Plomberie.png') }}" alt="">
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
                <p class="text-uppercase">
                    Our Statistics</p>
                <h3 class="title-style">
                    We are Proud to Share with You            </h3>
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
                                    <q>Duis aute irure dolor in reprehenderit in voluptate
                                        velit esse cillum dolore eu. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.                                </q> </blockquote>
                                <div class="source">-
                                    Mario Spe                            </div>
                            </li>

                            <li class="anim2">
                                <img src="images/images-testi2.jpg" class="img-fluid rounded-circle" alt="client image">
                                <blockquote class="quote"><q>Sed ut perspiciatis unde omnis iste natus error sit
                                        voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                                        illo inventore.                                </q> </blockquote>
                                <div class="source">-
                                    Petey Cru                            </div>
                            </li>

                            <li class="anim3">
                                <img src="images/images-testi3.jpg" class="img-fluid rounded-circle " alt="client image">
                                <blockquote class="quote"><q>Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis nostrud exercitation.                                </q> </blockquote>
                                <div class="source">-
                                    Anna Sth                            </div>
                            </li>

                            <li class="anim4">
                                <img src="images/images-testi1.jpg" class="img-fluid rounded-circle" alt="client image">
                                <blockquote class="quote">
                                    <q>Duis aute irure dolor in reprehenderit in voluptate
                                        velit esse cillum dolore eu. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.                                </q> </blockquote>
                                <div class="source">-
                                    Gail For                            </div>
                            </li>

                            <li class="anim5">
                                <img src="images/images-testi2.jpg" class="img-fluid rounded-circle" alt="client image">
                                <blockquote class="quote"><q>Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis nostrud exercitation.                                </q> </blockquote>
                                <div class="source">-
                                    Boye Fra                            </div>
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


    <!-- Homepage Blog grids -->

    <section>
    </section>


    <div class="w3l-blog-block-5 py-5" id="blog">
        <div class="container py-md-5 py-4 HomePageBlog">

            <div class="title-main text-center mx-auto mb-4" style="max-width:500px;">
                <p class="text-uppercase">
                    Our News</p>
                <h3 class="title-style">
                    Latest Blog Posts            </h3>
            </div>


            <div class="row justify-content-center">


                <div class="col-lg-4 col-md-6 mt-4">
                    <div class="blog-card-single">
                        <div class="grids5-info">

                            <a href="hello-world.html">

                                <div class="post-thumbnail">
                                    <img width="640" height="426" src="images/11-blog2.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" srcset="https://wp.w3layouts.com/eduschool/wp-content/uploads/sites/60/2021/11/blog2.jpg 640w, https://wp.w3layouts.com/eduschool/wp-content/uploads/sites/60/2021/11/blog2-300x200.jpg 300w, https://wp.w3layouts.com/eduschool/wp-content/uploads/sites/60/2021/11/blog2-360x240.jpg 360w" sizes="(max-width: 640px) 100vw, 640px">			</div><!-- .post-thumbnail -->

                            </a>

                            <div class="blog-info">

                                <h4><a href="hello-world.html">Hello world!</a></h4>

                                <!-- <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, sunt inc
                                    officia deserunt.</p> -->

                                <div class="d-flex align-items-center justify-content-between mt-4">

                                    <div class="blogpost-author d-flex align-items-center">
                                        <a class="d-flex align-items-center" href="w3layouts.html" title="23k followers">
                                            <img class="img-fluid" src="images/avatar-328cc1f23e4a3b73aa60ee6ced1897a1" alt="W3Layouts" style="max-width:40px"> <span class="small ms-2"> <a class="url fn n" href="w3layouts.html">W3Layouts</a></span>
                                        </a>
                                    </div>

                                    <p class="date-text"><i class="far fa-calendar-alt me-1"></i>December 1, 2021</p>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 mt-4">
                    <div class="blog-card-single">
                        <div class="grids5-info">

                            <a href="knowledge-based-programs-from-children.html">

                                <div class="post-thumbnail">
                                    <img width="640" height="426" src="images/11-blog3.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" srcset="https://wp.w3layouts.com/eduschool/wp-content/uploads/sites/60/2021/11/blog3.jpg 640w, https://wp.w3layouts.com/eduschool/wp-content/uploads/sites/60/2021/11/blog3-300x200.jpg 300w, https://wp.w3layouts.com/eduschool/wp-content/uploads/sites/60/2021/11/blog3-360x240.jpg 360w" sizes="(max-width: 640px) 100vw, 640px">			</div><!-- .post-thumbnail -->

                            </a>

                            <div class="blog-info">

                                <h4><a href="knowledge-based-programs-from-children.html">Knowledge-based programs from children</a></h4>

                                <!-- <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, sunt inc
                                    officia deserunt.</p> -->

                                <div class="d-flex align-items-center justify-content-between mt-4">

                                    <div class="blogpost-author d-flex align-items-center">
                                        <a class="d-flex align-items-center" href="w3layouts.html" title="23k followers">
                                            <img class="img-fluid" src="images/avatar-328cc1f23e4a3b73aa60ee6ced1897a1" alt="W3Layouts" style="max-width:40px"> <span class="small ms-2"> <a class="url fn n" href="w3layouts.html">W3Layouts</a></span>
                                        </a>
                                    </div>

                                    <p class="date-text"><i class="far fa-calendar-alt me-1"></i>November 11, 2021</p>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 mt-4">
                    <div class="blog-card-single">
                        <div class="grids5-info">

                            <a href="strategic-social-media-evolution-of-visual.html">

                                <div class="post-thumbnail">
                                    <img width="640" height="426" src="images/11-blog1.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" srcset="https://wp.w3layouts.com/eduschool/wp-content/uploads/sites/60/2021/11/blog1.jpg 640w, https://wp.w3layouts.com/eduschool/wp-content/uploads/sites/60/2021/11/blog1-300x200.jpg 300w, https://wp.w3layouts.com/eduschool/wp-content/uploads/sites/60/2021/11/blog1-360x240.jpg 360w" sizes="(max-width: 640px) 100vw, 640px">			</div><!-- .post-thumbnail -->

                            </a>

                            <div class="blog-info">

                                <h4><a href="strategic-social-media-evolution-of-visual.html">Strategic Social Media &amp; Evolution of Visual</a></h4>

                                <!-- <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, sunt inc
                                    officia deserunt.</p> -->

                                <div class="d-flex align-items-center justify-content-between mt-4">

                                    <div class="blogpost-author d-flex align-items-center">
                                        <a class="d-flex align-items-center" href="w3layouts.html" title="23k followers">
                                            <img class="img-fluid" src="images/avatar-328cc1f23e4a3b73aa60ee6ced1897a1" alt="W3Layouts" style="max-width:40px"> <span class="small ms-2"> <a class="url fn n" href="w3layouts.html">W3Layouts</a></span>
                                        </a>
                                    </div>

                                    <p class="date-text"><i class="far fa-calendar-alt me-1"></i>November 11, 2021</p>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>

    <section>
    </section>

    <!-- //Homepage Blog grids -->



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
