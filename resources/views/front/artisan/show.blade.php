@extends("layouts.master")

@section("content")

    <!-- inner banner -->
    <section class="inner-banner py-5">
        <style>
            .inner-banner {
                background-image: url(https://wp.w3layouts.com/eduschool/wp-content/themes/eduschool/assets/images/banner3.jpg);
            }
        </style>
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container BlogSinglePageBanner">
                <h4 class="inner-text-title font-weight-bold pt-5"> Profil de {{ $user->name }}</h4>
            </div>
        </div>
    </section>
    <!-- //inner banner -->




    <article id="post-54" class="post-54 post type-post status-publish format-standard has-post-thumbnail hentry category-education category-teaching">

        <section class="w3l-blogpost-content py-5">
            <div class="container py-md-5 py-4 w3BlogLayout">

                <div class="row">

                    <div class="col-lg-12 text-11 pr-lg-5">

                        <div class="text11-content">

                            <div class="single-post-content">

                                <div class="entry-content">
                                    <div class="author-card author-listhny my-lg-5 my-sm-4 w3ArticleAuth">
                                        <div class="row">
                                            <div class="author-left col-lg-3 col-md-4 mb-md-0 mb-4">
                                                <a href="w3layouts.html">
                                                    <img class="img-fluid" src="{{ asset("images/avatar-328cc1f23e4a3b73aa60ee6ced1897a1") }}" alt="W3Layouts">
                                                </a>
                                            </div>
                                            <div class="author-right col-lg-9 col-md-8 position-relative align-self ps-xl-4 ps-lg-5">

                                                <h4 class="mb-0"><a href="w3layouts.html" class="title-team-28">{{ $user->name }}</a></h4>
                                                <p class="para-team my-0">{{ $user->description }}</p>

                                                <div class="d-flex justify-content-between mt-4">
                                                    <span> {{ $user->type }} </span>
                                                    <span> {{ $user->experience." ans d'expérience" }} </span>
                                                    <span>4.67 (3 avis) </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w3l-servicesblock">
                                        <h3 class="mt-2 text-center">Les services que je propose</h3>
                                        <ul class="mt-4 list-style-lis pt-lg-1 d-flex flex-wrap justify-content-between">
                                            @forelse( $user->services as $service )
                                               <li><i class="fas fa-check-circle"></i> {{ $service->name }} </li>
                                            @empty
                                                <li><i class="fas fa-check-circle"></i>  </li>
                                            @endforelse
                                        </ul>
                                    </div>
                                    <hr>
                                    <h3 class="text-center my-2 text-wh">Mes réalisations</h3>
                                    <div class="my-slider">
                                        <img src="{{ asset("images/images-testi".rand(1,3).".jpg") }}" class="arrow-png img-responsive mx-1">
                                        <img src="{{ asset("images/images-testi".rand(1,3).".jpg") }}" class="arrow-png img-responsive mx-1">
                                        <img src="{{ asset("images/images-testi".rand(1,3).".jpg") }}" class="arrow-png img-responsive mx-1">
                                        <img src="{{ asset("images/images-testi".rand(1,3).".jpg") }}" class="arrow-png img-responsive mx-1">
                                        <img src="{{ asset("images/images-testi".rand(1,3).".jpg") }}" class="arrow-png img-responsive mx-1">
                                        <img src="{{ asset("images/images-testi".rand(1,3).".jpg") }}" class="arrow-png img-responsive mx-1">
                                        <img src="{{ asset("images/images-testi".rand(1,3).".jpg") }}" class="arrow-png img-responsive mx-1">
                                    </div>
                                    <hr>
                                    <h3 class="text-center my-2 text-bl">Avis reçus pour MBAREK Edlimi</h3>
                                     @foreach( $user->reviews as $review )
                                         <div class="row">
                                             <div class="col-sm-2">
                                                 <a href="w3layouts.html">
                                                     <img class="img-fluid" src="{{ asset("images/avatar-328cc1f23e4a3b73aa60ee6ced1897a1") }}" alt="W3Layouts">
                                                 </a>
                                             </div>
                                             <div class="col-sm-10">
                                                 <div>
                                                     {{ $review->user->name }}
                                                     <ul class="list-unstyled list-style-lis">
                                                         @for ($i = 1; $i <= $review->stars; $i++)
                                                             <i class="fa fa-star"></i>
                                                         @endfor
                                                     </ul>
                                                     {{ $review->content }}
                                                 </div>
                                             </div>
                                         </div>
                                        <hr>
                                     @endforeach
                                </div>
                            </div>

                            <div class="w3PostComments">

                                <div id="comments" class="comments-area">

                                    <div id="respond" class="comment-respond">
                                        <h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="/eduschool/2021/11/11/knowledge-based-programs-from-children/#respond" style="display:none;">Cancel reply</a></small></h3><form action="https://wp.w3layouts.com/eduschool/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate><p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p><p class="comment-form-comment"><label for="comment">Comment</label> <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea></p><p class="comment-form-author"><label for="author">Name <span class="required">*</span></label> <input id="author" name="author" type="text" value="" size="30" maxlength="245" required="required"></p>
                                            <p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input id="email" name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes" required="required"></p>
                                            <p class="comment-form-url"><label for="url">Website</label> <input id="url" name="url" type="url" value="" size="30" maxlength="200"></p>
                                            <p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"> <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label></p>
                                            <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Post Comment"> <input type="hidden" name="comment_post_ID" value="54" id="comment_post_ID">
                                                <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                            </p></form>	</div><!-- #respond -->

                                </div><!-- #comments -->
                            </div>

                        </div>
                    </div>



                    <div class="sidebar-side col-lg-4 col-md-12 col-sm-12 mt-lg-0 mt-5 ps-md-5">
                        <div class="sidebar right-sidebar">

                        </div>
                    </div>

                </div>
            </div>



        </section>
    </article><!-- #post-54 -->
@endsection
