@extends("layouts.master")

@section("content")
    <section class="w3l-team-13 py-5" id="team">
        <div class="container py-md-5 py-4 LandingPageTeam">

            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <p class="text-uppercase">Our Team</p>
                <h3 class="title-style">Meet our Teachers</h3>
            </div>

            <div class="row text-center left-side justify-content-center">

                @forelse( $artisans as $artisan )
                <div class="col-lg-4 col-6 mt-4">
                    <div class="image-one">
                        <div>
                            <img src="{{ asset("images/images-testi".rand(1,3).".jpg") }}" class="arrow-png img-responsive">
                            <h4>{{ $artisan->name }}</h4>
                            <h5>{{ $artisan->type }}</h5>
                            <hr>
                            <h6>{{ $artisan->job->name }},{{ $artisan->experience." ans d'expérience" }}</h6>
                            <div class="mt-2">

                                <a href="{{ $artisan->path() }}" class="btn btn-style mt-2">Consulter <i class="fa fa-chevron-circle-right"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
                @empty
                    <div>Aucun artisan existe</div>
                @endforelse
            </div>

        </div>
    </section>
@endsection
