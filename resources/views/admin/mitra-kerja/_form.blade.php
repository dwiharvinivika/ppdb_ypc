<div class="d-flex justify-content-center mb-2">
    <img src="{{ asset('img/mitra-kerja/'.($mitraKerja->gambar??'../bodybg/bg1.png')) }}" id="preview-img" alt="" class="img-thumbnail">
</div>
@csrf
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align"
        for="gambar">Gambar
    </label>
    <div class="col-md-6 col-sm-6 ">
        <input type="file" name="gambar" id="gambar"
            class="form-control @error('gambar') is-invalid @enderror">
            @error('gambar')<div class="invalid-feedback"> {{ $message }}</div> @enderror
    </div>
</div>
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align"
        for="first-name">Nama Perusahaan
    </label>
    <div class="col-md-6 col-sm-6 ">
        <input type="text" name="mitra_kerja" id="first-name"
            class="form-control @error('mitra_kerja') is-invalid @enderror" value="{{ old('mitra_kerja', $mitraKerja->mitra_kerja??'') }}">
            @error('mitra_kerja')<div class="invalid-feedback"> {{ $message }}</div> @enderror
    </div>
</div>
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align"
        for="keterangan">Keterangan
    </label>
    <div class="col-md-6 col-sm-6 ">
        <textarea name="keterangan" id="keterangan" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror">{{ old('keterangan', $mitraKerja->keterangan??'') }}</textarea>
        @error('keterangan')<div class="invalid-feedback"> {{ $message }}</div> @enderror
    </div>
</div>
