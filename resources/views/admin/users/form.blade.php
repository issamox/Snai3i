<div class="form-group row align-items-center">
    <div class="col-sm-8  my-2">
        <label class="col-form-label" for="name">Nom</label>
        <input name="name" id="name" type="text" class="form-control form-control-lg" value="{{ old('name') ?? $user->name }}">
        @error('name')
        <span class="messages"><p class="text-danger error">{{ $message }}</p></span>
        @enderror
    </div>
    <div class="col-sm-4  my-2">
        <?php $src = isset($user->image) && $user->image != "" ? asset("uploads/Admin/Users/$user->image") : asset("admin/files/assets/images/default-image.png")  ?>
        <img class="img-fluid photo d-block m-auto image-action" src="{{ $src }}" alt="">
        <input type="file" name="image" class="input_file" style="display: none">
        @error('image')
          <span class="messages"><p class="text-danger error">{{ $message }}</p></span>
        @enderror
    </div>
    <div class="col-sm-12 my-2">
        <label class="col-form-label" for="description">Description</label>
        <textarea name="description" id="description" class="form-control form-control-lg">{{ old('description') ?? $user->description }}</textarea>
        @error('description')
        <span class="messages"><p class="text-danger error">{{ $message }}</p></span>
        @enderror
    </div>
    <div class="col-sm-6  my-2">
        <label class="col-form-label" for="name">Email</label>
        <input name="email" id="email" type="text" class="form-control form-control-lg" value="{{ old('email') ?? $user->email }}">
        @error('email')
            <span class="messages"><p class="text-danger error">{{ $message }}</p></span>
        @enderror
    </div>
    <div class="col-sm-6  my-2">
        <label class="col-form-label" for="role">Role</label>
        <select name="role" id="role" class="form-control form-control-lg">
            <option {{ old('role') == 'Admin'       || $user->role == 'Admin'       ? 'selected' : '' }} value="Admin">Admin</option>
            <option {{ old('role') == 'Artisan'     || $user->role == 'Artisan'     ? 'selected' : '' }} value="Artisan">Artisan</option>
            <option {{ old('role') == 'Entreprise'  || $user->role == 'Entreprise'  ? 'selected' : '' }} value="Entreprise">Entreprise</option>
            <option {{ old('role') == 'Client'      || $user->role == 'Client'      ? 'selected' : '' }} value="Client">Client</option>
        </select>
        @error('role')
            <span class="messages"><p class="text-danger error">{{ $message }}</p></span>
        @enderror
    </div>
    <div class="col-sm-6  my-2">
        <label class="col-form-label" for="phone">Tel</label>
        <input name="phone" id="phone" type="text" class="form-control form-control-lg" value="{{ old('phone') ?? $user->phone }}">
        @error('phone')
        <span class="messages"><p class="text-danger error">{{ $message }}</p></span>
        @enderror
    </div>
    <div class="col-sm-6  my-2">
        <label class="col-form-label" for="city_id">Ville</label>
        <select id="city_id" name="city_id" class="form-control form-control-lg">
            @foreach( $cities as $city )
                <option {{ old('city_id') == $city->id || $user->city_id == $city->id ? 'selected' : '' }} value="{{ $city->id }}"> {{ $city->name }} </option>
            @endforeach
        </select>
        @error('city_id')
           <span class="messages"><p class="text-danger error">{{ $message }}</p></span>
        @enderror
    </div>
    <div class="col-sm-4  my-2">
        <label class="col-form-label" for="name">metier</label>
        <select id="job_id" name="job_id" class="form-control form-control-lg">
            @foreach( $jobs as $job )
                <option {{ old('job_id') == $job->id || $user->job_id == $job->id ? 'selected' : '' }} value="{{ $job->id }}"> {{ $job->name }} </option>
            @endforeach
        </select>
        @error('job_id')
          <span class="messages"><p class="text-danger error">{{ $message }}</p></span>
        @enderror
    </div>
    <div class="col-sm-4  my-2">
        <label class="col-form-label" for="experience">Années d'expérience</label>
        <input name="experience" id="experience" type="number" class="form-control form-control-lg" value="{{ old('experience') ?? $user->experience }}">
        @error('experience')
            <span class="messages"><p class="text-danger error">{{ $message }}</p></span>
        @enderror
    </div>
    <div class="col-sm-4  my-2">
        <label class="col-form-label" for="type">Type</label>
        <select name="type" id="type" class="form-control form-control-lg">
            <option {{ old('type') == 'Particulier' || $user->type == 'Particulier' ? 'selected' : '' }} value="Particulier">Particulier</option>
            <option {{ old('type') == 'Entreprise'  || $user->type == 'Entreprise'  ? 'selected' : '' }} value="Entreprise">Entreprise</option>
        </select>

        @error('type')
           <span class="messages"><p class="text-danger error">{{ $message }}</p></span>
        @enderror
    </div>
    <div class="col-sm-6  my-2">
        <label class="col-form-label" for="password">Mot de passe</label>
        <input name="password" id="password" type="password" class="form-control form-control-lg" value="{{ old('password') ?? $user->password_decrypted }}">
        @error('password')
           <span class="messages"><p class="text-danger error">{{ $message }}</p></span>
        @enderror
    </div>
    <div class="col-sm-6  my-2">
        <label class="col-form-label" for="password_confirmation">Confirmer le mot de passe:</label>
        <input name="password_confirmation" id="password_confirmation" type="password" class="form-control form-control-lg" value="{{ old('password') ?? $user->password_decrypted }}">
    </div>
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
                            <i class="btn btn-danger feather icon-trash"></i>
                        </td>
                    </tr>
                @endforeach
            @elseif(  $user->services && count($user->services) > 0   )
                @foreach( $user->services as $key => $item )
                    @if($item->name != "")
                        <tr>
                            <td>
                                <div class="form-group {{ $errors->has("services.$key") ? 'alert-danger' : '' }}">
                                    <input type="text" name="services[]" class="form-control" value="{{ $item->name  }}">
                                    <input type="hidden" name="service_id[]" class="form-control" value="{{ $item->id  }}">
                                </div>
                            </td>
                            <td class="deleteService">
                                <i class="btn btn-danger feather icon-trash" data-id="{{ $item->id }}"></i>
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
                        <i class="btn btn-danger feather icon-trash"></i>
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
        <label class="col-form-label" for="realisations">Les réalisations</label>
        <input type="file" multiple name="realisations[]" class="form-control form-control-lg" id="realisations">
    </div>
    @if( count($user->realisations) )
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Image Grid</h5>
                </div>
                <div class="card-block">
                    <div class="row">
                        @foreach( $user->realisations as $realisation )
                            <div class="col-lg-3 col-sm-4">
                                <div class="thumbnail">
                                    <div class="thumb">
                                        <a href="" data-id="{{ $realisation->id }}" class="btn btn-sm btn-danger position-absolute deleteRealisation" style="top: 5px;right: 5px"><i class="feather icon-trash"></i></a>
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
    <div class="col-sm-12 text-center">
        <button class="btn btn-primary btn-block">Enregistrer</button>
    </div>
</div>
