<div class="form-group row">
    <div class="col-sm-12">
        <label class="col-form-label" for="name">Nom</label>
        <input name="name" id="name" type="text" class="form-control form-control-lg" value="{{ old('name') ?? $service->name }}">
        @error('name')
        <span class="messages"><p class="text-danger error">{{ $message }}</p></span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-12 text-center">
        <button class="btn btn-primary btn-block">Enregistrer</button>
    </div>
</div>
