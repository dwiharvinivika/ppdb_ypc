    <label class="col-form-label col-md-2 col-sm-2 label-align">Jurusan Pilihan 1</label>
    <div class="col-md-4 col-sm-4 form-group has-feedback">
        <select name="jur1" class="form-control">
            @foreach (['RPL', 'TKJ', 'MM', 'DPIB'] as $item)
                <option value="{{ $item }}" {{ old('jur1', $register->jur1??'')==$item?'selected':'' }}>{{ $item }}</option>
            @endforeach
        </select>
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Jurusan Pilihan 2</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <select name="jur2" class="form-control">
            @foreach (['TKRO', 'TBSM', 'TEKLIN'] as $item)
                <option value="{{ $item }}" {{ old('jur1', $register->jur1??'')==$item?'selected':'' }}>{{ $item }}</option>
            @endforeach
        </select>
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">NISN</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="text" name="nisn" maxlength="15" value="{{ old('nisn', $register->nisn??'') }}" class="form-control" id="inputSuccess2" required>
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">NIK</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="text" name="nik" maxlength="15" value="{{ old('nik', $register->nik??'') }}" class="form-control" id="inputSuccess2" >
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Nama Lengkap</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="text" name="nama" maxlength="40" value="{{ old('nama', $register->nama??'') }}" class="form-control" id="inputSuccess2" >
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Tempat Lahir</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="text" name="tmp_lhr" maxlength="20" value="{{ old('tmp_lhr', $register->tmp_lhr??'') }}" class="form-control" id="inputSuccess2">
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Tanggal Lahir</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="date" name="tgl_lhr" maxlength="15" value="{{ old('tgl_lhr', $register->tgl_lhr??'') }}" class="form-control" id="inputSuccess2" >
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Jenis Kelamin</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <select name="jk" class="form-control">
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
        </select>
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Asal Sekolah</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="text" name="sekolah" maxlength="50" value="{{ old('sekolah', $register->sekolah??'') }}" class="form-control" id="inputSuccess2" >
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Peringkat</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="number" name="peringkat" value="{{ old('peringkat', $register->peringkat??'') }}" class="form-control" id="inputSuccess2">
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Alamat Lengkap</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <textarea name="alamat_siswa" Maxlength="100" class="form-control">{{ old('alamat_siswa', $register->alamat_siswa??'') }}</textarea>
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Tinggi Badan (cm)</label>
        <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="number" name="tb" value="{{ old('tb', $register->tb??'') }}" class="form-control" id="inputSuccess2">
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Tahun Lulus</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="text" name="lulus_thn" maxlength="4" value="{{ old('lulus_thn', $register->lulus_thn??'') }}" class="form-control" id="inputSuccess2" >
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Kontak (WA Aktif)</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="text" name="hp_siswa" maxlength="13" value="{{ old('hp_siswa', $register->hp_siswa??'') }}" class="form-control" id="inputSuccess2">
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Tanggal Registrasi</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="date" name="tgl_reg" maxlength="15" value="{{ old('tgl_reg', $register->tgl_reg??'') }}" class="form-control" id="inputSuccess2" >
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Kode Sekolah</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="text" name="kodesekolah" maxlength="15" value="{{ old('kodesekolah', $register->kodesekolah??'') }}" class="form-control" id="inputSuccess2" >
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Transportasi</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <select name="transportasi" class="form-control">
            <option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
            <option value="Kendaraan Umum">Kendaraan Umum</option>
            <option value="Jalan Kaki">Jalan Kaki</option>
        </select>
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Tinggal</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <select name="tinggal" class="form-control">
            <option value="Kendaraan Pribadi">Bersama Orangtua</option>
            <option value="Kendaraan Umum">Bersama Saudara</option>
            <option value="Jalan Kaki">Pesantren</option>
            <option value="Jalan Kaki">Kost</option>
            <option value="Jalan Kaki">Lainnya</option>
        </select>
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Jumlah Saudara</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="number" name="jmlsaudara" maxlength="13" value="{{ old('jmlsaudara', $register->jmlsaudara??'') }}" class="form-control" id="inputSuccess2">
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Jarak</label>
    <div class="col-md-2 col-sm-2 form-group has-feedback">
        <input type="number" name="jarak" min="0" max="13" value="{{ old('jarak', $register->jarak??'') }}" class="form-control" id="inputSuccess2">
    </div>
    <div class="col-md-2 col-sm-2 form-group has-feedback">
        <select name="ketjarak" class="form-control">
            @foreach (['km', 'hm', 'dm', 'm', 'dll'] as $satuan)
                <option value="{{ $satuan }}" {{ old('ketjarak', $register->ketjarak??'')==$satuan?'selected':'' }}>{{ $satuan }}</option>
            @endforeach
        </select>
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Waktu</label>
    <div class="col-md-2 col-sm-2  form-group has-feedback">
        <input type="number" name="waktu" max="12" min="0" value="{{ old('waktu', $register->waktu??'') }}" class="form-control" id="inputSuccess2">
    </div>
    <div class="col-md-2 col-sm-2 form-group has-feedback">
        <select name="ketwaktu" class="form-control">
            @foreach (['jam', 'menit'] as $satuan)
                <option value="{{ $satuan }}" {{ old('ketwaktu', $register->ketwaktu??'')==$satuan?'selected':'' }}>{{ $satuan }}</option>
            @endforeach
        </select>
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Penerima KIP</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="radio" name="kipksp" {{ old('kipksp', $register->kipksp??'')=="1"?'checked':'' }} class="flat" value="1" id="inputSuccess2"> Ya
        <input type="radio" name="kipksp" {{ old('kipksp', $register->kipksp??'')=="0"?'checked':'' }} class="flat" value="0" id="inputSuccess2"> Tidak
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Kebutuhan Khusus</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="radio" name="kebutuhankhusus" {{ old('kebutuhankhusus', $register->kebutuhankhusus??'')=='1'?'checked':'' }} class="flat" value="1" id="inputSuccess2"> Ya
        <input type="radio" name="kebutuhankhusus" {{ old('kebutuhankhusus', $register->kebutuhankhusus??'')=='0'?'checked':'' }} class="flat" value="0" id="inputSuccess2"> Tidak
    </div>
