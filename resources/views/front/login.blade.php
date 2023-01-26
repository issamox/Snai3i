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
                <h4 class="inner-text-title font-weight-bold pt-5">Connexion</h4>
            </div>
        </div>
    </section>
    <!-- //inner banner -->
    <section>
        <div class="container py-md-5 py-4 LandingPageTeam">
            <div class="row justify-content-center align-items-stretch front-signup">
                <div class="col-md-6">
                    <form action="{{ route('front.login') }}" method="post">
                        @csrf
                        <div class="form-group row align-items-center">
                            <div class="col-sm-12  mb-1">
                                <label class="col-form-label" for="email">E-mail</label>
                                <input name="email" id="email" type="email" class="form-control form-control-lg" value="{{ old('email') }}" autocomplete="off">
                                @error('email')
                                <span class="messages"><p class="text-danger error">{{ $message }}</p></span>
                                @enderror
                            </div>
                            <div class="col-sm-12">
                                <label class="col-form-label" for="password">Mot de passe</label>
                                <input name="password" id="password" type="password" class="form-control form-control-lg" value="{{ old('password') }}" autocomplete="off">
                                @error('password')
                                <span class="messages"><p class="text-danger error">{{ $message }}</p></span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-style btn-style-1 w-100 mb-2">Se connecter</button>
                                <a class="btn btn-style btn-style-3 w-100" href="{{ route('front.signup') }}"> Créer un compte </a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <img class="h-100" src="https://www.bricall.ma/assets/images/signup/illustration.png" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
