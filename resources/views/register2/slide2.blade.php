<label class="col-form-label col-md-2 col-sm-2 label-align">Nama Ayah</label>
<div class="col-md-4 col-sm-4  form-group has-feedback">
    <input type="text" name="nama_ayah" maxlength="30" value="{{ old('nama_ayah') }}" class="form-control" id="inputSuccess2" >
</div>
<label class="col-form-label col-md-2 col-sm-2 label-align">Nama Ibu</label>
<div class="col-md-4 col-sm-4  form-group has-feedback">
    <input type="text" name="nama_ibu" maxlength="30" value="{{ old('nama_ibu') }}" class="form-control" id="inputSuccess2" >
</div>
<label class="col-form-label col-md-2 col-sm-2 label-align">Pekerjaan Ayah</label>
<div class="col-md-4 col-sm-4  form-group has-feedback">
    <select name="pekerjaan_ayah" class="form-control">
        <option value="Buruh">Buruh</option>
        <option value="Wiraswasta">Wiraswasta</option>
        <option value="Wiraswasta">Wirausaha</option>
        <option value="Pedagang">Pedagang</option>
        <option value="Guru">Guru</option>
        <option value="PNS">PNS</option>
        <option value="Polisi">Polisi</option>
        <option value="TNI">TNI</option>
        <option value="Lainnya">Lainnya</option>
    </select>
</div>
<label class="col-form-label col-md-2 col-sm-2 label-align">Pekerjaan Ibu</label>
<div class="col-md-4 col-sm-4  form-group has-feedback">
    <select name="pekerjaan_ibu" class="form-control">
        <option value="Buruh">Buruh</option>
        <option value="Wiraswasta">Wiraswasta</option>
        <option value="Wiraswasta">Wirausaha</option>
        <option value="Pedagang">Pedagang</option>
        <option value="Guru">Guru</option>
        <option value="PNS">PNS</option>
        <option value="Polwan">Polwan</option>
        <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
        <option value="Lainnya">Lainnya</option>
    </select>
</div>
<label class="col-form-label col-md-2 col-sm-2 label-align">Nama Wali</label>
<div class="col-md-4 col-sm-4  form-group has-feedback">
    <input type="text" name="nama_wali" maxlength="40" value="{{ old('nama_wali') }}" class="form-control" id="inputSuccess2" >
</div>
<label class="col-form-label col-md-2 col-sm-2 label-align">Pekerjaan Wali</label>
<div class="col-md-4 col-sm-4  form-group has-feedback">
    <select name="pekerjaan_wali" class="form-control">
        <option value="Buruh">Buruh</option>
        <option value="Wiraswasta">Wiraswasta</option>
        <option value="Wiraswasta">Wirausaha</option>
        <option value="Pedagang">Pedagang</option>
        <option value="Guru">Guru</option>
        <option value="PNS">PNS</option>
        <option value="Polisi">Polisi</option>
        <option value="TNI">TNI</option>
        <option value="Lainnya">Lainnya</option>
    </select>
</div>
<label class="col-form-label col-md-2 col-sm-2 label-align">Alamat Orangtua/Wali</label>
<div class="col-md-4 col-sm-4  form-group has-feedback">
    <textarea name="alamat_orangtua" Maxlength="100" class="form-control">{{ old('alamat_orangtua') }}</textarea>
</div>
<label class="col-form-label col-md-2 col-sm-2 label-align">Kontak</label>
<div class="col-md-4 col-sm-4  form-group has-feedback">
    <input type="text" name="kontak" maxlength="13" class="form-control" value="{{ old('kontak') }}" id="inputSuccess2">
</div>