@if (!request()->routeIs('register.create'))
    <div class="alert alert-info font-weight-bold">Jika tidak ingin merubah fotonya, bisa diliwat.</div>
@endif
<label class="col-form-label col-md-2 col-sm-2 label-align">Foto</label>
<div class="col-md-4 col-sm-4  form-group has-feedback">
    <input type="file" name="foto" class="form-control" id="inputSuccess2" >
</div>
<label class="col-form-label col-md-2 col-sm-2 label-align">Ijazah</label>
<div class="col-md-4 col-sm-4  form-group has-feedback">
    <input type="file" name="ijazah"  class="form-control" id="inputSuccess2">
</div>
