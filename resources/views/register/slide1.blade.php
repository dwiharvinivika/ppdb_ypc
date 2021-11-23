<div class="row">
    <div class="form-group span6">
        <label>Jurusan Pilihan 1</label>
        <select name="jur1" class="form-control">
            <option value="RPL">RPL</option>
            <option value="TKJ">TKJ</option>
            <option value="MM">MM</option>
            <option value="DPIB">DPIB</option>
        </select>
    </div>
    <div class="form-group span6">
        <label>Jurusan Pilihan 2</label>
        <select name="jur2" class="form-control">
            <option value="TKRO">TKRO</option>
            <option value="TBSM">TBSM</option>
            <option value="TEKLIN">TEKLIN</option>
        </select>
    </div>
    <div class="form-group span6">
        <label>NISN</label>
        <input type="text" name="nisn" maxlength="15" value="{{ old('nisn') }}" class="form-control" required>
    </div>
    <div class="form-group span6">
        <label>NIK</label>
        <input type="text" name="nik" maxlength="15" value="{{ old('nik') }}" class="form-control">
    </div>
    <div class="form-group span6">
        <label>Nama Lengkap</label>
        <input type="text" name="nama" maxlength="40" value="{{ old('nama') }}" class="form-control">
    </div>
    <div class="form-group span6">
        <label>Tempat Lahir</label>
        <input type="text" name="tmp_lhr" maxlength="50" value="{{ old('tmp_lhr') }}" class="form-control">
    </div>
    <div class="form-group span6">
        <label>Tanggal Lahir</label>
        <input type="date" name="tgl_lhr" maxlength="15" value="{{ old('tgl_lhr') }}" class="form-control">
    </div>
    <div class="form-group span6">
        <label>Jenis Kelamin</label>
        <select name="jk" class="form-control" class="form-control">
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
        </select>
    </div>
    <div class="form-group span6">
        <label>Asal Sekolah</label>
        <input type="text" name="sekolah" maxlength="50" value="{{ old('sekolah') }}" class="form-control">
    </div>
    <div class="form-group span6">
        <label>Peringkat</label>
        <input type="number" name="peringkat" value="{{ old('peringkat') }}" class="form-control">
    </div>
    <div class="form-group span6">
        <label>Alamat Lengkap</label>
        <textarea name="alamat_siswa" Maxlength="100" class="form-control">{{ old('alamat_siswa') }}</textarea>
    </div>
    <div class="form-group span6">
        <label>Tinggi Badan (cm)</label>
        <input type="number" name="tb" value="{{ old('tb') }}" class="form-control">
    </div>
    <div class="form-group span6">
        <label>Tahun Lulus</label>
        <input type="text" name="lulus_thn" maxlength="4" value="{{ old('lulus_thn') }}" class="form-control">
    </div>
    <div class="form-group span6">
        <label>Kontak</label>
        <input type="text" name="hp_siswa" maxlength="13" value="{{ old('hp_siswa') }}" class="form-control">
    </div>
    <div class="form-group span6">
        <label>Tanggal Registrasi</label>
        <input type="date" name="tgl_reg" maxlength="15" value="{{ old('tgl_reg') }}" class="form-control">
    </div>
    <div class="form-group span6">
        <label>Kode Sekolah</label>
        <input type="text" name="kodesekolah" maxlength="15" value="{{ old('kodesekolah') }}" class="form-control">
    </div>
    <div class="form-group span6">
        <label>Kebutuhan Khusus</label>
        <input type="radio" name="kebutuhankhusus" {{ old('kebutuhankhusus')=="1"?'checked':'' }} class="flat" value="1" id="inputSuccess2"> Ya
        <input type="radio" name="kebutuhankhusus" {{ old('kebutuhankhusus')=="0"?'checked':'' }} class="flat" value="0" id="inputSuccess2"> Tidak
    </div>
    <div class="form-group span6">
        <label>Transportasi</label>
        <select name="transportasi" class="form-control">
        <option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
        <option value="Kendaraan Umum">Kendaraan Umum</option>
        <option value="Jalan Kaki">Jalan Kaki</option>
        </select>
    </div>
    <div class="form-group span6">
        <label>Tinggal</label>
        <select name="tinggal" class="form-control">
        <option value="Kendaraan Pribadi">Bersama Orangtua</option>
        <option value="Kendaraan Umum">Bersama Saudara</option>
        <option value="Jalan Kaki">Pesantren</option>
        <option value="Jalan Kaki">Kost</option>
        <option value="Jalan Kaki">Lainnya</option>
        </select>
    </div>
    <div class="form-group span6">
        <label>Jumlah Saudara</label>
        <input type="number" name="jmlsaudara" maxlength="13" value="{{ old('jmlsaudara') }}" class="form-control">
    </div>
    <div class="form-group span6">
        <label>Jarak</label>
        <input type="text" name="jarak" maxlength="13" value="{{ old('jarak') }}" class="form-control">
    </div>
    <div class="form-group span6">
        <label>Keterangan Jarak</label>
        <input type="text" name="ketjarak" maxlength="13" value="{{ old('ketjarak') }}" class="form-control">
    </div>
    <div class="form-group span6">
        <label>Waktu</label>
        <input type="text" name="waktu" maxlength="13" value="{{ old('waktu') }}" class="form-control">
    </div>
    <div class="form-group span6">
        <label>Keterangan Waktu</label>
        <input type="text" name="ketwaktu" maxlength="13" value="{{ old('ketwaktu') }}" class="form-control">
    </div>
    <div class="form-group span6">
        <label>Penerima KIP</label>
        <input type="radio" name="kipksp" {{ old('kipksp')=="1"?'checked':'' }} class="flat" value="1" id="inputSuccess2"> Ya
        <input type="radio" name="kipksp" {{ old('kipksp')=="0"?'checked':'' }} class="flat" value="0" id="inputSuccess2"> Tidak
    </div>
    <div class="form-group span6">
        <label>Bukan Penerima KIP</label>
        <input type="radio" name="nokipksp" {{ old('nokipksp')=="1"?'checked':'' }} class="flat" value="1" id="inputSuccess2"> Ya
        <input type="radio" name="nokipksp" {{ old('nokipksp')=="0"?'checked':'' }} class="flat" value="0" id="inputSuccess2"> Tidak
    </div>
</div>
