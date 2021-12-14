<div class="form-group row">
    <div class="col-sm-8">
        <label class="col-form-label" for="name">Nom</label>
        <input name="name" id="name" type="text" class="form-control form-control-lg" value="{{ old('name') ?? $city->name }}">
        @error('name')
        <span class="messages"><p class="text-danger error">{{ $message }}</p></span>
        @enderror
    </div>
    <div class="col-sm-4">
        <?php $src = isset($city->image) && $city->image != "" ? asset("uploads/Admin/Cities/$city->image") : asset("admin/files/assets/images/default-image.png")  ?>
        <img class="img-fluid photo d-block m-auto" src="{{ $src }}" alt="">
        <input type="file" name="image" class="input_file" style="display: none">
        @error('image')
        <span class="messages"><p class="text-danger error">{{ $message }}</p></span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-12 text-center">
        <button class="btn btn-primary btn-block">Enregistrer</button>
    </div>
</div>
