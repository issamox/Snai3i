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
                <h4 class="inner-text-title font-weight-bold pt-5"> Inscription</h4>
            </div>
        </div>
    </section>
    <!-- //inner banner -->
    <section>
        <div class="container py-md-5 py-4 LandingPageTeam">
            <div class="row justify-content-center align-items-stretch front-signup">
                <div class="col-md-8">
                    <form action="{{ route('front.signup.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row align-items-center">
                            <div class="col-sm-8  my-2">
                                <label class="col-form-label" for="name">Nom</label>
                                <input name="name" id="name" type="text" class="form-control form-control-lg" value="{{ old('name') }}">
                                @error('name')
                                <span class="messages"><p class="text-danger error">{{ $message }}</p></span>
                                @enderror
                            </div>
                            <div class="col-sm-4  my-2">
                                <?php $src = asset("admin/files/assets/images/default-image.png")  ?>
                                <img class="img-fluid photo d-block m-auto image-action" src="{{ $src }}" alt="">
                                <input type="file" name="image" class="input_file" style="display: none">
                                @error('image')
                                <span class="messages"><p class="text-danger error">{{ $message }}</p></span>
                                @enderror
                            </div>
                            <div class="col-sm-12 my-2">
                                <label class="col-form-label" for="description">Description</label>
                                <textarea name="description" id="description" class="form-control form-control-lg">{{ old('description') }}</textarea>
                                @error('description')
                                <span class="messages"><p class="text-danger error">{{ $message }}</p></span>
                                @enderror
                            </div>
                            <div class="col-sm-6  my-2">
                                <label class="col-form-label" for="name">Email</label>
                                <input name="email" id="email" type="text" class="form-control form-control-lg" value="{{ old('email') }}">
                                @error('email')
                                <span class="messages"><p class="text-danger error">{{ $message }}</p></span>
                                @enderror
                            </div>
                            <div class="col-sm-6 my-2">
                                <label class="col-form-label" for="type">Type</label>
                                <select name="type" id="type" class="form-control form-control-lg">
                                    <option {{ old('type') == 'Particulier'  ? 'selected' : '' }} value="Particulier">Particulier</option>
                                    <option {{ old('type') == 'Entreprise'   ? 'selected' : '' }} value="Entreprise">Entreprise</option>
                                </select>

                                @error('type')
                                <span class="messages"><p class="text-danger error">{{ $message }}</p></span>
                                @enderror
                            </div>
                            <div class="col-sm-6  my-2">
                                <label class="col-form-label" for="phone">Numéro de téléphone</label>
                                <input name="phone" id="phone" type="text" class="form-control form-control-lg" value="{{ old('phone') }}">
                                @error('phone')
                                <span class="messages"><p class="text-danger error">{{ $message }}</p></span>
                                @enderror
                            </div>
                            <div class="col-sm-6  my-2">
                                <label class="col-form-label" for="city_id">Ville</label>
                                <select id="city_id" name="city_id" class="form-control form-control-lg">
                                    @foreach( $cities as $city )
                                        <option {{ old('city_id') == $city->id  ? 'selected' : '' }} value="{{ $city->id }}"> {{ $city->name }} </option>
                                    @endforeach
                                </select>
                                @error('city_id')
                                <span class="messages"><p class="text-danger error">{{ $message }}</p></span>
                                @enderror
                            </div>
                            <div class="col-sm-6  my-2">
                                <label class="col-form-label" for="name">metier</label>
                                <select id="job_id" name="job_id" class="form-control form-control-lg">
                                    @foreach( $jobs as $job )
                                        <option {{ old('job_id') == $job->id ? 'selected' : '' }} value="{{ $job->id }}"> {{ $job->name }} </option>
                                    @endforeach
                                </select>
                                @error('job_id')
                                <span class="messages"><p class="text-danger error">{{ $message }}</p></span>
                                @enderror
                            </div>
                            <div class="col-sm-6  my-2">
                                <label class="col-form-label" for="experience">Années d'expérience</label>
                                <input name="experience" id="experience" type="number" class="form-control form-control-lg" value="{{ old('experience') }}">
                                @error('experience')
                                <span class="messages"><p class="text-danger error">{{ $message }}</p></span>
                                @enderror
                            </div>
                            <div class="col-sm-6  my-2">
                                <label class="col-form-label" for="password">Mot de passe</label>
                                <input name="password" id="password" type="password" class="form-control form-control-lg" value="{{ old('password') }}">
                                @error('password')
                                <span class="messages"><p class="text-danger error">{{ $message }}</p></span>
                                @enderror
                            </div>
                            <div class="col-sm-6  my-2">
                                <label class="col-form-label" for="password_confirmation">Confirmer le mot de passe:</label>
                                <input name="password_confirmation" id="password_confirmation" type="password" class="form-control form-control-lg" value="{{ old('password') }}">
                            </div>
                            <hr>
                  {{--          <div class="col-sm-12 my-2">
                                <label class="col-form-label" for="type">Les réalisations</label>
                                <input type="file" multiple name="realisations[]" class="form-control form-control-lg">
                            </div>--}}
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 text-center">
                                <button class="btn btn-primary btn-block">Enregistrer</button>
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
