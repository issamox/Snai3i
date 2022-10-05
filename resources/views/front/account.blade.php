@extends("layouts.master")
@section('styles')
    <link rel="stylesheet" href="https://demo.dashboardpack.com/adminty-html/files/bower_components/lightbox2/dist/css/lightbox.min.css">
@endsection
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
                <h4 class="inner-text-title font-weight-bold pt-5">Mon compte</h4>
            </div>
        </div>
    </section>
    <!-- //inner banner -->
    <section>
        <div class="container">
            <div class="row justify-content-center align-items-stretch account-container">
                <div class="col-md-3">
                    <ul class="list-group mt-4">
                        <li class="list-group-item active"><a href="{{ route('front.account') }}">Mon profil</a></li>
                        <li class="list-group-item">
                            <a  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Déconnexion') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="col-md-9">
                    <div class="title">Mon profil</div>
                    <div class="description">Mettez à jour  si nécessaire vos informations de compte puis cliquez sur le bouton «Enregistrer les paramètres» en bas du formulaire.</div>

                    <form action="{{ route('front.profile') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row align-items-center">
                            <div class="col-sm-8  my-2">
                                <label class="col-form-label" for="name">Nom</label>
                                <input name="name" id="name" type="text" class="form-control form-control-lg" value="{{ old('name') ?? Auth::user()->name }}">
                                @error('name')
                                  <span class="messages"><p class="text-danger error">{{ $message }}</p></span>
                                @enderror
                            </div>
                            <div class="col-sm-2  my-2">
                                <?php $src = isset(Auth::user()->image) && Auth::user()->image != "" ? asset("uploads/Admin/Users/".Auth::user()->image) : asset("admin/files/assets/images/default-image.png")  ?>
                                <img class="img-fluid photo d-block m-auto image-action" src="{{ $src }}" alt="">
                                <input type="file" name="image" class="input_file" style="display: none">
                                @error('image')
                                <span class="messages"><p class="text-danger error">{{ $message }}</p></span>
                                @enderror
                            </div>
                            <div class="col-sm-12 my-2">
                                <label class="col-form-label" for="description">Description</label>
                                <textarea name="description" id="description" class="form-control form-control-lg">{{ old('description') ?? Auth::user()->description }}</textarea>
                                @error('description')
                                <span class="messages"><p class="text-danger error">{{ $message }}</p></span>
                                @enderror
                            </div>
                            <div class="col-sm-6  my-2">
                                <label class="col-form-label" for="name">Email</label>
                                <input name="email" id="email" type="text" class="form-control form-control-lg" value="{{ old('email') ?? Auth::user()->email }}">
                                @error('email')
                                <span class="messages"><p class="text-danger error">{{ $message }}</p></span>
                                @enderror
                            </div>
                            <div class="col-sm-6  my-2">
                                <label class="col-form-label" for="phone">Tel</label>
                                <input name="phone" id="phone" type="text" class="form-control form-control-lg" value="{{ old('phone') ?? Auth::user()->phone }}">
                                @error('phone')
                                <span class="messages"><p class="text-danger error">{{ $message }}</p></span>
                                @enderror
                            </div>
                            <div class="col-sm-6  my-2">
                                <label class="col-form-label" for="city_id">Ville</label>
                                <select id="city_id" name="city_id" class="form-control form-control-lg">
                                    @foreach( $cities as $city )
                                        <option {{ old('city_id') == $city->id || Auth::user()->city_id == $city->id ? 'selected' : '' }} value="{{ $city->id }}"> {{ $city->name }} </option>
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
                                        <option {{ old('job_id') == $job->id || Auth::user()->job_id == $job->id ? 'selected' : '' }} value="{{ $job->id }}"> {{ $job->name }} </option>
                                    @endforeach
                                </select>
                                @error('job_id')
                                <span class="messages"><p class="text-danger error">{{ $message }}</p></span>
                                @enderror
                            </div>
                            <div class="col-sm-6  my-2">
                                <label class="col-form-label" for="experience">Années d'expérience</label>
                                <input name="experience" id="experience" type="number" class="form-control form-control-lg" value="{{ old('experience') ?? Auth::user()->experience }}">
                                @error('experience')
                                <span class="messages"><p class="text-danger error">{{ $message }}</p></span>
                                @enderror
                            </div>
                            <div class="col-sm-6  my-2">
                                <label class="col-form-label" for="type">Type</label>
                                <select name="type" id="type" class="form-control form-control-lg">
                                    <option {{ old('type') == 'Particulier' || Auth::user()->type == 'Particulier' ? 'selected' : '' }} value="Particulier">Particulier</option>
                                    <option {{ old('type') == 'Entreprise'  || Auth::user()->type == 'Entreprise'  ? 'selected' : '' }} value="Entreprise">Entreprise</option>
                                </select>

                                @error('type')
                                <span class="messages"><p class="text-danger error">{{ $message }}</p></span>
                                @enderror
                            </div>
                            <div class="col-sm-6  my-2">
                                <label class="col-form-label" for="password">Mot de passe</label>
                                <input name="password" id="password" type="password" class="form-control form-control-lg" value="{{ old('password') ?? Auth::user()->password_decrypted }}">
                                @error('password')
                                <span class="messages"><p class="text-danger error">{{ $message }}</p></span>
                                @enderror
                            </div>
                            <div class="col-sm-6  my-2">
                                <label class="col-form-label" for="password_confirmation">Confirmer le mot de passe:</label>
                                <input name="password_confirmation" id="password_confirmation" type="password" class="form-control form-control-lg" value="{{ old('password') ?? Auth::user()->password_decrypted }}">
                            </div>
                            <hr>
                            <div class="col-sm-12">
                                <label class="col-form-label" for="services">Mes services</label>
                                <table class="table table-responsive multiple-rows bg-inverse my-2">
                                    <thead>
                                    <tr>
                                        <th style="width: 100%">List de mes services</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @if( old('services') != null)
                                        @foreach( old('services') as $key => $value )
                                            <tr>
                                                <td>
                                                    <div class="form-group {{ $errors->has("services.$key") ? 'alert-danger' : '' }}">
                                                        <input type="text" name="services[]" class="form-control" value="{{ old("services.$key")}}">
                                                    </div>
                                                </td>
                                                <td class="delete_row">
                                                    <i class="btn btn-danger fa fa-trash"></i>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @elseif(  Auth::user()->services && count(Auth::user()->services) > 0   )
                                        @foreach( Auth::user()->services as $key => $item )
                                            @if($item->name != "")
                                                <tr>
                                                    <td>
                                                        <div class="form-group {{ $errors->has("services.$key") ? 'alert-danger' : '' }}">
                                                            <input type="text" name="services[]" class="form-control" value="{{ $item->name  }}">
                                                            <input type="hidden" name="service_id[]" class="form-control" value="{{ $item->id  }}">
                                                        </div>
                                                    </td>
                                                    <td class="deleteService">
                                                        <i class="btn btn-danger fa fa-trash" data-id="{{ $item->id }}"></i>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    @else
                                        <tr>
                                            <td>
                                                <div class="form-group {{ $errors->has("services.0") ? 'alert-danger' : '' }}">
                                                    <input type="text" name="services[]" class="form-control">
                                                </div>
                                            </td>
                                            <td class="delete_row">
                                                <i class="btn btn-danger fa fa-trash"></i>
                                            </td>
                                        </tr>
                                    @endif
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td colspan="2">
                                            <a href="#" class="add_new_row color-code"> <i class="fa fa-plus"></i> Ajouter Service</a>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <hr>
                            <div class="col-sm-12 my-2">
                                <label class="col-form-label" for="type">Les réalisations</label>
                                <input type="file" multiple name="realisations[]" class="form-control form-control-lg">
                            </div>
                            @if( count(Auth::user()->realisations) )
                                <div class="col-sm-12">
                                    <div class="card p-1">
                                        <div class="card-header">
                                            <h5>Mes réalisations</h5>
                                        </div>
                                        <div class="card-block p-1">
                                            <div class="row">
                                                @foreach( Auth::user()->realisations as $realisation )
                                                    <div class="col-lg-3 col-sm-4">
                                                        <div class="thumbnail">
                                                            <div class="thumb position-relative">
                                                                <a href="" data-id="{{ $realisation->id }}" class="btn btn-sm btn-danger position-absolute deleteRealisation" style="top: 5px;right: 5px"><i class="fa fa-trash"></i></a>
                                                                <a href="{{ asset('/uploads/Admin/Realisations/'.$realisation->name) }}" data-lightbox="1" data-title="My caption 1">
                                                                    <img src="{{ asset('/uploads/Admin/Realisations/'.$realisation->name) }}" alt="" class="img-fluid img-thumbnail w-100" style="height: 120px">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 text-center my-2">
                                <button class="btn btn-primary btn-block w-100">Enregistrer les infos</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="https://demo.dashboardpack.com/adminty-html/files/bower_components/lightbox2/dist/js/lightbox.min.js"></script>
    <script>
        $(document).on('click','.deleteRealisation',function(e){
            e.preventDefault();
            let $this = $(this);
            Swal.fire({
                title:'êtes-vous sûr',
                text: 'Voulez-vous vraiment supprimer ?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Non',
                confirmButtonText: 'Oui'
            }).then((result) => {
                if (result.value) {
                    var id = $(this).data("id");
                    var token = $("meta[name='csrf-token']").attr("content");

                    $.ajax({
                        url: "/admin/realisations/"+id,
                        type: 'DELETE',
                        data: {
                            "id": id,
                            "_token": token,
                        },
                        success: function (){ $this.parent().parent().parent().hide(400);console.log($this)},
                        error : function (){ location.reload();}
                    });
                }
            });
        });
        $(document).on('click','.deleteService i',function(e){
            e.preventDefault();
            let $this = $(this);
            Swal.fire({
                title:'êtes-vous sûr',
                text: 'Voulez-vous vraiment supprimer ?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Non',
                confirmButtonText: 'Oui'
            }).then((result) => {
                if (result.value) {
                    var id = $(this).data("id");
                    var token = $("meta[name='csrf-token']").attr("content");

                    $.ajax({
                        url: "/admin/services/"+id,
                        type: 'DELETE',
                        data: {
                            "id": id,
                            "_token": token,
                        },
                        success: function (){ $this.parent().parent().hide(400);console.log($this)},
                        error :  function (){ location.reload();}
                    });
                }
            });
        });
    </script>
@endsection
