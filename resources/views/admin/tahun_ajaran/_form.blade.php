@csrf
<div class="item form-group">
    <label class="col-form-label col-md-4 col-sm-4 label-align"
        for="tahun_awal">Tahun Ajaran
    </label>
    <div class="col-md-2 col-sm-2 ">
        <input type="number" min="{{ date('Y')-5 }}" max="2099" name="tahun_ajaran_awal" id="tahun_awal" class="form-control @error('tahun_ajaran') is-invalid @enderror" value="{{ old('tahun_ajaran_awal', $tahun_ajaran->tahun_ajaran_awal??date('Y')) }}">
        @error('tahun_ajaran_awal')
            <div class="invalid-feedback"> {{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-2 col-sm-2 ">
        <input type="number" min="{{ date('Y')-5 }}" max="2099" name="tahun_ajaran_akhir" id="tahun_akhir" class="form-control @error('tahun_ajaran') is-invalid @enderror" value="{{ old('tahun_ajaran_akhir', $tahun_ajaran->tahun_ajaran_akhir??date('Y')+1) }}">
        @error('tahun_ajaran_akhir')
            <div class="invalid-feedback"> {{ $message }}</div>
        @enderror
    </div>
</div>
<div class="item form-group">
    <label class="col-form-label col-md-4 col-sm-4 label-align"
        for="last-name">Status
    </label>
    <div class="col-md-4 col-sm-4">
        <select name="status" class="form-control">
            <option value="Aktif" {{ ($tahun_ajaran->status??'')=='Aktif'?'selected':'' }}>Aktif</option>
            <option value="Tidak Aktif" {{ ($tahun_ajaran->status??'')=='Tidak Aktif'?'selected':'' }}>Tidak Aktif</option>
        </select>
    </div>
</div>
