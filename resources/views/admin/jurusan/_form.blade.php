@csrf
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align"
        for="first-name">Kode Jurusan
    </label>
    <div class="col-md-6 col-sm-6 ">
        <input type="text" name="kode_jurusan" id="first-name"
            class="form-control @error('kode_jurusan') is-invalid @enderror" value="{{ old('kode_jurusan', $jurusan->kode_jurusan??'') }}">
            @error('kode_jurusan') <div class="invalid-feedback"> {{ $message }}</div> @enderror
    </div>
</div>
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align"
        for="first-name">Jurusan
    </label>
    <div class="col-md-6 col-sm-6 ">
        <input type="text" name="jurusan" id="first-name"
            class="form-control @error('jurusan') is-invalid @enderror" value="{{ old('jurusan', $jurusan->jurusan??'') }}">
            @error('jurusan')<div class="invalid-feedback"> {{ $message }}</div> @enderror
        <div class="text-muted">* Untuk menebalkan tulisan, gunakan <b>&lt;b&gt;</b> dan akhiri dengan <b>&lt;/b&gt;</b></div>
    </div>
</div>
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align"
        for="last-name">Gambar
    </label>
    <div class="col-md-6 col-sm-6 ">
        <input type="text" name="gambar" id="last-name" name="last-name"
            class="form-control @error('gambar') is-invalid @enderror" value="{{ old('gambar', $jurusan->gambar??'') }}">
            @error('gambar')<div class="invalid-feedback"> {{ $message }}</div> @enderror
    </div>
</div>
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align"
        for="last-name">Deskripsi
    </label>
    <div class="col-md-6 col-sm-6 ">
        <textarea name="keterangan" class="form-control @error('keterangan') is-invalid @enderror">{{ old('keterangan', $jurusan->keterangan??'') }}</textarea>
    </div>
</div>
