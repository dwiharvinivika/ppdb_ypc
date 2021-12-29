@csrf
<div class="row">
    <div class="col-md-7">
        <label class="col-form-label col-md-4 col-sm-3 label-align"
            for="kode_jurusan">Kode Jurusan
        </label>
        <div class="col-md-8 col-sm-6 form-group">
            <input type="text" name="kode_jurusan" id="kode_jurusan" class="form-control
            @error('kode_jurusan') is-invalid @enderror" value="{{ old('kode_jurusan', $jurusan->kode_jurusan??'') }}">
            <x-validation name="kode_jurusan"/>
        </div>
        <label class="col-form-label col-md-4 col-sm-3 label-align"
            for="jurusan">Nama Jurusan
        </label>
        <div class="col-md-8 col-sm-6 form-group">
            <input type="text" name="jurusan" id="jurusan"
                class="form-control @error('jurusan') is-invalid @enderror" value="{{ old('jurusan', $jurusan->jurusan??'') }}">
            <x-validation name="jurusan"/>
            <div class="text-helper"><i>Gunakan <b>&lt;b&gt; huruf &lt;/b&gt;</b> untuk mempertebal huruf/kata</i></div>
        </div>
        <label class="col-form-label col-md-4 col-sm-3 label-align"
            for="gambar">Gambar
        </label>
        <div class="col-md-8 col-sm-6 form-group">
            <div class="custom-file">
                <input type="file" name="gambar" id="gambar" class="custom-file-input @error('gambar') is-invalid @enderror" accept="image/*">
                <label for="gambar" class="custom-file-label">Pilih Logo</label>
                <x-validation name="gambar"/>
            </div>
        </div>
        <label class="col-form-label col-md-4 col-sm-3 label-align"
            for="keterangan">Keterangan
        </label>
        <div class="col-md-8 col-sm-6 form-group">
            <textarea name="keterangan" id="keterangan"
                class="form-control @error('keterangan') is-invalid @enderror">{{ old('keterangan', $jurusan->keterangan??'') }}</textarea>
            <x-validation name="keterangan"/>
        </div>
    </div>
    <div class="col-md-4">
        <img src="{{ asset('img/jurusan/'.($jurusan->gambar??'../default-foto.png')) }}" class="img-thumbnail" id="preview-img" alt="">
    </div>
</div>

@push('js')
    <script>
        $('#gambar').on('change', function(){
            const [file] = $(this)[0].files;
            if(file){$('#preview-img').attr('src', URL.createObjectURL(file))}
        })
    </script>
@endpush
