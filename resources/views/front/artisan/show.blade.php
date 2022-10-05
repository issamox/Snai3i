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
                                                    <span> {{ $user->experience." Ans d'expérience" }} </span>
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
                                                <div class="not-found">Aucun service trouve</div>
                                            @endforelse
                                        </ul>
                                    </div>
                                    <hr>
                                    <h3 class="text-center my-2 text-wh">Mes réalisations</h3>
                                    <div class="my-slider">
                                        @forelse( $user->realisations as $realisation )
                                            <img src="{{ asset('/uploads/Admin/Realisations/'.$realisation->name) }}" class="arrow-png img-responsive image-realisation-slider mx-1">
                                        @empty
                                            <div class="not-found">Aucun image de realisation trouve</div>
                                        @endforelse
                                    </div>
                                    <hr>
                                    <h3 class="text-center my-2 text-bl">Avis reçus pour {{ $user->name }}</h3>
                                     @foreach( $user->reviews as $review )
                                         <div class="row">
                                             <div class="col-sm-2">
                                                 <a href="w3layouts.html">
                                                     <img class="img-fluid" src="{{ asset("images/avatar-328cc1f23e4a3b73aa60ee6ced1897a1") }}" alt="W3Layouts">
                                                 </a>
                                             </div>
                                             <div class="col-sm-10">
                                                 <div>
                                                     {{ $review->author->name }}
                                                     <ul class="list-unstyled mb-2 ps-0">
                                                         @for ($i = 1; $i <= $review->stars; $i++)
                                                             <i class="fa fa-star checked" style="color:var(--primary-color);"></i>
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
                                        <h3 id="reply-title" class="comment-reply-title">Evaluer un artisan</h3>
                                        <form action="{{ route('artisan.review') }}" method="post" id="commentform" class="comment-form">
                                            @csrf
                                            <p class="comment-notes"> Veuillez remplir tous les champs obligatoires <span class="required">*</span></p>
                                            <p class="comment-form-comment">
                                                <label for="comment">Commentaire (0 / 200)</label>
                                                <textarea id="comment" name="comment" cols="40" rows="8" maxlength="200" required="required"></textarea>
                                                @error('comment')
                                                  <span class="messages"><p class="text-danger error">{{ $message }}</p></span>
                                               @enderror
                                            </p>
                                            <label for="">Qualité de la prestation</label>
                                            <div class="rating">
                                                <input type="radio" name="stars" value="5" id="5"><label for="5">☆</label>
                                                <input type="radio" name="stars" value="4" id="4"><label for="4">☆</label>
                                                <input type="radio" name="stars" value="3" id="3"><label for="3">☆</label>
                                                <input type="radio" name="stars" value="2" id="2"><label for="2">☆</label>
                                                <input type="radio" name="stars" value="1" id="1"><label for="1">☆</label>
                                            </div>
                                            @error('stars')
                                               <span class="messages"><p class="text-danger error">{{ $message }}</p></span>
                                            @enderror
                                            <p class="form-submit">
                                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                                                <input name="submit" type="submit" id="submit" class="submit" value="Soumettre">
                                            </p>
                                        </form>
                                    </div><!-- #respond -->

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
