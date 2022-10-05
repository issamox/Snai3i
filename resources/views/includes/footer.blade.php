<!-- footer -->
<footer class="w3l-footer-29-main">
    <div class="footer-29 pt-5 pb-4">
        <div class="container pt-md-4 EduschoolFooter">
            <div class="row footer-top-29">

                <div class="col-lg-4 col-md-6 footer-list-29">
                    <h6 class="footer-title-29">
                        Contact Info </h6>

                    <p class="mb-2 pe-xl-5">
                        Address : Edu School, 10001, 5th Avenue, #06 lane street, NY - 62617.                    </p>

                    <p class="mb-2">
                        Phone Number :                        <a href="tel:+1(21)%20234%204567">+1(21) 234 4567</a>
                    </p>

                    <p class="mb-2">
                        Email :                        <a href="mailto:info@example.com">info@example.com</a>
                    </p>
                </div>

                <div class="col-lg-2 col-md-3 col-6 footer-list-29 mt-md-0 mt-4">


                    <div id="archives-4" class="widget_archive"><h6 class="footer-title-29">Archives</h6>
                        <ul>
                            <li><a href="12.html">December 2021</a></li>
                            <li><a href="11.html">November 2021</a></li>
                        </ul>

                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-6 ps-lg-5 ps-lg-4 footer-list-29 mt-md-0 mt-4">


                    <div id="categories-4" class="widget_categories"><h6 class="footer-title-29">Categories</h6>
                        <ul>
                            <li class="cat-item cat-item-2"><a href="articles.html">Articles</a>
                            </li>
                            <li class="cat-item cat-item-3"><a href="education.html">Education</a>
                            </li>
                            <li class="cat-item cat-item-4"><a href="gaames.html">Games</a>
                            </li>
                            <li class="cat-item cat-item-5"><a href="teaching.html">Teaching</a>
                            </li>
                            <li class="cat-item cat-item-1"><a href="uncategorized.html">Uncategorized</a>
                            </li>
                        </ul>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-8 footer-list-29 mt-lg-0 mt-4 ps-lg-5 FooterSubscribe">
                    <h6 class="footer-title-29">Subscribe</h6>
                    <form action="" class="subscribe d-flex" method="post">
                        <input type="email" name="email" placeholder="Email Address" required="">
                        <button class="button-style"><span class="fa fa-paper-plane" aria-hidden="true"></span></button>
                    </form>
                    <p class="mt-3">Subscribe to our mailing list and get updates to your email inbox.</p>
                </div>

            </div>

            <!-- copyright -->
            <p class="copy-footer-29 text-center pt-lg-2 mt-5 pb-2 CopyRights">&copy; 2022  Snay3i. All Rights Reserved | <a href="#"> Issam. </a>
            </p>
            <!-- //copyright -->

        </div>
    </div>
</footer>
<!-- //footer -->





<!-- Js scripts -->
<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fas fa-level-up-alt" aria-hidden="true"></span>
</button>
<script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
        } else {
            document.getElementById("movetop").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
<!-- //move top -->

<!-- common jquery plugin -->
<script type="text/javascript" src="{{ asset('admin/files/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- //common jquery plugin -->

<!-- /counter-->
<script src="{{asset('js/js-counter.js')}}"></script>
<!-- //counter-->

<!-- theme switch js (light and dark)-->
<script src="{{ asset('js/js-theme-change.js') }}"></script>
<!-- //theme switch js (light and dark)-->

<!-- MENU-JS -->
<script>
    $(window).on("scroll", function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 80) {
            $("#site-header").addClass("nav-fixed");
        } else {
            $("#site-header").removeClass("nav-fixed");
        }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
        $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
        if ($(window).width() > 991) {
            $("header").removeClass("active");
        }
        $(window).on("resize", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
        });
    });
</script>
<!-- //MENU-JS -->

<!-- disable body scroll which navbar is in active -->
<script>
    $(function () {
        $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- //disable body scroll which navbar is in active -->

<!-- bootstrap -->
<script src="{{ asset('js/js-bootstrap.min.js') }}"></script>
<!-- //bootstrap -->
<!-- //Js scripts -->

<script src="{{ asset('admin/files/assets/js/sweetalert2.min.js') }}"></script>
<script src="{{ asset('js/js-navigation.js') }}" id="w3layouts-navigation-js"></script>
<script src="{{ asset('js/js-wp-embed.min.js') }}" id="wp-embed-js"></script>
<script src="{{ asset('js/slick.min.js') }}" id="wp-embed-js"></script>
@include("admin.includes.session_msg")
<script src="{{ asset('js/main.js') }}"></script>
@yield('scripts')
</body>

</html>
