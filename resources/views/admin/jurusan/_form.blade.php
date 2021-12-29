@csrf
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align"
        for="kode_jurusan">Kode Jurusan
    </label>
    <div class="col-md-6 col-sm-6 ">
        <input type="text" name="kode_jurusan" id="kode_jurusan"
            class="form-control @error('kode_jurusan') is-invalid @enderror" value="{{ old('kode_jurusan', $jurusan->kode_jurusan??'') }}">
            @error('kode_jurusan') <div class="invalid-feedback"> {{ $message }}</div> @enderror
    </div>
</div>
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align"
        for="jurusan">Nama Jurusan
    </label>
    <div class="col-md-6 col-sm-6 ">
        <input type="text" name="jurusan" id="jurusan"
            class="form-control @error('jurusan') is-invalid @enderror" value="{{ old('jurusan', $jurusan->jurusan??'') }}">
            @error('jurusan')<div class="invalid-feedback"> {{ $message }}</div> @enderror

    </div>
</div>
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align"
        for="gambar">Gambar
    </label>
    <div class="col-md-6 col-sm-6 ">
        <div class="custom-file">
            <input type="text" name="gambar" id="last-name" name="last-name"
                class="custom-file-label @error('gambar') is-invalid @enderror" value="{{ old('gambar', $jurusan->gambar??'') }}">
            <label for="gambar" class="custom-file-label">Pilih Logo</label>
                @error('gambar')<div class="invalid-feedback"> {{ $message }}</div> @enderror
        </div>
    </div>
</div>
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align"
        for="keterangan">Keterangan
    </label>
    <div class="col-md-6 col-sm-6 ">
        <textarea name="keterangan" id="last-name" name="last-name"
            class="form-control @error('keterangan') is-invalid @enderror">{{ old('keterangan', $jurusan->keterangan??'') }}</textarea>
            @error('keterangan')<div class="invalid-feedback"> {{ $message }}</div> @enderror
    </div>
</div>

