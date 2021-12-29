@if (!request()->routeIs('register.create'))
    <div class="alert alert-info font-weight-bold">Jika tidak ingin merubah fotonya, bisa diliwat.</div>
@endif
<div class="col-12 col-md-6">
    <div class="form-group">
        <label for="foto">Foto</label>
        <div class="custom-file">
            <input type="file" name="foto" id="foto" class="custom-file-input" accept="image/*">
            <label for="foto" class="custom-file-label">Pilih Foto</label>
        </div>
    </div>
    <img id="preview-foto" src="{{ asset('img/avatar-2.jpg') }}" alt="" class="img-thumbnail w-100">
</div>
<div class="col-12 col-md-6">
    <div class="form-group">
        <label for="ijazah">Ijazah</label>
        <div class="custom-file">
            <input type="file" name="ijazah" id="ijazah" class="custom-file-input" accept="image/*">
            <label for="ijazah" class="custom-file-label">Pilih Ijazah</label>
        </div>
    </div>
    <img id="preview-ijazah" src="{{ asset('img/default-foto.png') }}" alt="" class="img-thumbnail w-100">
</div>

@push('js')
    <script>
        $('input[type=file]').on('change', function(e){
            let name = e.target.name;
            const [file] = $(this)[0].files;
            if(file){
                $('#preview-'+name).attr('src', URL.createObjectURL(file));
            }
        })
    </script>
@endpush
