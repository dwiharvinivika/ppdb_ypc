@csrf
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align"
        for="first-name">Tujuan Bank
    </label>
    <div class="col-md-6 col-sm-6 ">
        <input type="text" name="kode_jurusan" id="first-name"
            class="form-control @error('kode_jurusan') is-invalid @enderror" value="{{ old('kode_jurusan', $jurusan->kode_jurusan??'') }}">
            @error('kode_jurusan') <div class="invalid-feedback"> {{ $message }}</div> @enderror
    </div>
</div>
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align"
        for="first-name">Nama Pengirim
    </label>
    <div class="col-md-6 col-sm-6 ">
        <input type="text" name="nama_pengirim" id="first-name"
            class="form-control @error('nama_pengirim') is-invalid @enderror" value="{{ old('nama_pengirim', $nama_pengirimn->nama_pengirim??'') }}">
            @error('nama_pengirim')<div class="invalid-feedback"> {{ $message }}</div> @enderror
        
    </div>
</div>
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align"
        for="last-name">Bukti Pembayaran
    </label>
    <div class="col-md-6 col-sm-6 ">
        <input type="text" name="gambar" id="last-name" name="last-name"
            class="form-control @error('gambar') is-invalid @enderror" value="{{ old('gambar', $jurusan->gambar??'') }}">
            @error('gambar')<div class="invalid-feedback"> {{ $message }}</div> @enderror
    </div>
</div>

