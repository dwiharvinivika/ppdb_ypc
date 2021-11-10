    <label class="col-form-label col-md-2 col-sm-2 label-align">Jurusan Pilihan 1</label>
    <div class="col-md-4 col-sm-4 form-group has-feedback">
        <select name="jur1" class="form-control">
            <option value="RPL">RPL</option>
            <option value="TKJ">TKJ</option>
            <option value="MM">MM</option>
            <option value="DPIB">DPIB</option>
        </select>
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Jurusan Pilihan 2</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <select name="jur2" class="form-control">
        <option value="TKRO">TKRO</option>
        <option value="TBSM">TBSM</option>
        <option value="TEKLIN">TEKLIN</option>
        </select>
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">NISN</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="text" name="nisn" maxlength="15" value="{{ old('nisn') }}" class="form-control" id="inputSuccess2" required>
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">NIK</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="text" name="nik" maxlength="15" value="{{ old('nik') }}" class="form-control" id="inputSuccess2" >
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Nama Lengkap</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="text" name="nama" maxlength="40" value="{{ old('nama') }}" class="form-control" id="inputSuccess2" >
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Tempat Lahir</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="text" name="tmp_lhr" maxlength="50" value="{{ old('tmp_lhr') }}" class="form-control" id="inputSuccess2">
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Tanggal Lahir</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="date" name="tgl_lhr" maxlength="15" value="{{ old('tgl_lhr') }}" class="form-control" id="inputSuccess2" >
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
        <input type="text" name="sekolah" maxlength="50" value="{{ old('sekolah') }}" class="form-control" id="inputSuccess2" >
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Peringkat</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="number" name="peringkat" value="{{ old('peringkat') }}" class="form-control" id="inputSuccess2">
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Alamat Lengkap</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <textarea name="alamat_siswa" Maxlength="100" class="form-control">{{ old('alamat_siswa') }}</textarea>
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Tinggi Badan (cm)</label>
        <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="number" name="tb" value="{{ old('tb') }}" class="form-control" id="inputSuccess2">
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Tahun Lulus</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="text" name="lulus_thn" maxlength="4" value="{{ old('lulus_thn') }}" class="form-control" id="inputSuccess2" >
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Kontak</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="text" name="hp_siswa" maxlength="13" value="{{ old('hp_siswa') }}" class="form-control" id="inputSuccess2">
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Tanggal Registrasi</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="date" name="tgl_reg" maxlength="15" value="{{ old('tgl_reg') }}" class="form-control" id="inputSuccess2" >
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Gelombang</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <select name="gel" class="form-control">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        </select>
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Kode Sekolah</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="text" name="kodesekolah" maxlength="15" value="{{ old('kodesekolah') }}" class="form-control" id="inputSuccess2" >
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Kebutuhan Khusus</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="radio" name="kebutuhankhusus"  class="flat"  id="inputSuccess2"> Ya
        <input type="radio" name="kebutuhankhusus"  class="flat"  id="inputSuccess2"> Tidak
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
        <input type="number" name="jmlsaudara" maxlength="13" value="{{ old('jmlsaudara') }}" class="form-control" id="inputSuccess2">
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Jarak</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="text" name="jarak" maxlength="13" value="{{ old('jarak') }}" class="form-control" id="inputSuccess2">
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Keterangan Jarak</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="text" name="ketjarak" maxlength="13" value="{{ old('ketjarak') }}" class="form-control" id="inputSuccess2">
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Waktu</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="text" name="waktu" maxlength="13" value="{{ old('waktu') }}" class="form-control" id="inputSuccess2">
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Keterangan Waktu</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="text" name="ketwaktu" maxlength="13" value="{{ old('ketwaktu') }}" class="form-control" id="inputSuccess2">
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Penerima KIP</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="radio" name="kipksp" {{ old('kipksp')=="1"?'checked':'' }} class="flat" value="1" id="inputSuccess2"> Ya
        <input type="radio" name="kipksp" {{ old('kipksp')=="0"?'checked':'' }} class="flat" value="0" id="inputSuccess2"> Tidak
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Bukan Penerima KIP</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="radio" name="nokipksp" {{ old('nokipksp')=="1"?'checked':'' }} class="flat" value="1" id="inputSuccess2"> Ya
        <input type="radio" name="nokipksp" {{ old('nokipksp')=="0"?'checked':'' }} class="flat" value="0" id="inputSuccess2"> Tidak
    </div>