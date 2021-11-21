@php
    $pekerjaan_ayah = ['Buruh','Wiraswasta','Wirausaha','Pedangan','Guru','PNS','Polisi','TNI','Lainnya'];
    $pekerjaan_ibu = ['Buruh','Wiraswasta','Wirausaha','Pedangan','Guru','PNS','Polwan','Ibu Rumah Tangga','Lainnya'];
@endphp
<label class="col-form-label col-md-2 col-sm-2 label-align">Nama Ayah</label>
<div class="col-md-4 col-sm-4  form-group has-feedback">
    <input type="text" name="nama_ayah" maxlength="30" value="{{ old('nama_ayah', $register->orangtua->nama_ayah??'') }}" class="form-control" id="inputSuccess2" >
</div>
<label class="col-form-label col-md-2 col-sm-2 label-align">Nama Ibu</label>
<div class="col-md-4 col-sm-4  form-group has-feedback">
    <input type="text" name="nama_ibu" maxlength="30" value="{{ old('nama_ibu', $register->orangtua->nama_ibu??'') }}" class="form-control" id="inputSuccess2" >
</div>
<label class="col-form-label col-md-2 col-sm-2 label-align">Pekerjaan Ayah</label>
<div class="col-md-4 col-sm-4  form-group has-feedback">
    <select name="pekerjaan_ayah" class="form-control">
        @foreach ($pekerjaan_ayah as $pa)
            <option value="{{ $pa }}" {{ old('pekerjaan_ayah', $register->orangtua->pekerjaan_ayah??'')==$pa?'selected':'' }}>{{ $pa }}</option>
        @endforeach
    </select>
</div>
<label class="col-form-label col-md-2 col-sm-2 label-align">Pekerjaan Ibu</label>
<div class="col-md-4 col-sm-4  form-group has-feedback">
    <select name="pekerjaan_ibu" class="form-control">
        @foreach ($pekerjaan_ibu as $pi)
            <option value="{{ $pi }}" {{ old('pekerjaan_ibu', $register->orangtua->pekerjaan_ibu??'')==$pi?'selected':'' }}>{{ $pi }}</option>
        @endforeach
    </select>
</div>
<label class="col-form-label col-md-2 col-sm-2 label-align">Nama Wali</label>
<div class="col-md-4 col-sm-4  form-group has-feedback">
    <input type="text" name="nama_wali" maxlength="40" value="{{ old('nama_wali', $register->orangtua->nama_wali??'') }}" class="form-control" id="inputSuccess2" >
</div>
<label class="col-form-label col-md-2 col-sm-2 label-align">Pekerjaan Wali</label>
<div class="col-md-4 col-sm-4  form-group has-feedback">
    <select name="pekerjaan_wali" class="form-control">
        @foreach ($pekerjaan_ayah as $pw)
            <option value="{{ $pw }}" {{ old('pekerjaan_wali', $register->orangtua->pekerjaan_wali??'')==$pw?'selected':'' }}>{{ $pw }}</option>
        @endforeach
    </select>
</div>
<label class="col-form-label col-md-2 col-sm-2 label-align">Alamat Orangtua/Wali</label>
<div class="col-md-4 col-sm-4  form-group has-feedback">
    <textarea name="alamat_orangtua" Maxlength="100" class="form-control">{{ old('alamat_orangtua', $register->orangtua->alamat_orangtua??'') }}</textarea>
</div>
<label class="col-form-label col-md-2 col-sm-2 label-align">Kontak</label>
<div class="col-md-4 col-sm-4  form-group has-feedback">
    <input type="text" name="kontak" maxlength="13" class="form-control" value="{{ old('kontak', $register->orangtua->kontak??'') }}" id="inputSuccess2">
</div>
