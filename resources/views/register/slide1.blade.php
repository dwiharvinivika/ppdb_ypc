<div class="row">
    <div class="form-group">
        <label>Jurusan Pilihan 1</label>
        <select name="jur1" style="width: 97%">
            <option value="RPL">RPL</option>
            <option value="TKJ">TKJ</option>
            <option value="MM">MM</option>
            <option value="DPIB">DPIB</option>
        </select>
    </div>
    <div class="form-group">
        <label>Jurusan Pilihan 2</label>
        <select name="jur2" style="width: 97%">
            <option value="TKRO">TKRO</option>
            <option value="TBSM">TBSM</option>
            <option value="TEKLIN">TEKLIN</option>
        </select>
    </div>
    <div class="form-group">
        <label>NISN</label>
        <input type="text" name="nisn" maxlength="15" value="{{ old('nisn') }}" style="width: 95%" id="inputSuccess2" required>
    </div>
    <div class="form-group">
        <label>NIK</label>
        <input type="text" name="nik" maxlength="15" value="{{ old('nik') }}" style="width: 95%" id="inputSuccess2" >
    </div>
    <div class="form-group">
        <label>Nama Lengkap</label>
        <input type="text" name="nama" maxlength="40" value="{{ old('nama') }}" style="width: 95%" id="inputSuccess2" >
    </div>
    <div class="form-group">
        <label>Tempat Lahir</label>
        <input type="text" name="tmp_lhr" maxlength="50" value="{{ old('tmp_lhr') }}" style="width: 95%" id="inputSuccess2">
    </div>
    <div class="form-group">
        <label>Tanggal Lahir</label>
        <input type="date" name="tgl_lhr" maxlength="15" value="{{ old('tgl_lhr') }}" style="width: 95%" id="inputSuccess2" >
    </div>
    <div class="form-group">
        <label>Jenis Kelamin</label>
        <select name="jk" class="form-control" style="width: 97%">
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
        </select>
    </div>
    <div class="form-group">
        <label>Asal Sekolah</label>
        <input type="text" name="sekolah" maxlength="50" value="{{ old('sekolah') }}" style="width: 95%" id="inputSuccess2" >
    </div>
    <div class="form-group">
        <label>Peringkat</label>
        <input type="number" name="peringkat" value="{{ old('peringkat') }}" style="width: 95%" id="inputSuccess2">
    </div>
    <div class="form-group">
        <label>Alamat Lengkap</label>
        <textarea name="alamat_siswa" Maxlength="100" class="form-control">{{ old('alamat_siswa') }}</textarea>
    </div>
    <div class="form-group">
        <label>Tinggi Badan (cm)</label>
        <input type="number" name="tb" value="{{ old('tb') }}" style="width: 95%" id="inputSuccess2">
    </div>
    <div class="form-group">
        <label>Tahun Lulus</label>
        <input type="text" name="lulus_thn" maxlength="4" value="{{ old('lulus_thn') }}" style="width: 95%" id="inputSuccess2" >
    </div>
    <div class="form-group">
        <label>Kontak</label>
        <input type="text" name="hp_siswa" maxlength="13" value="{{ old('hp_siswa') }}" style="width: 95%" id="inputSuccess2">
    </div>
    <div class="form-group">
        <label>Tanggal Registrasi</label>
        <input type="date" name="tgl_reg" maxlength="15" value="{{ old('tgl_reg') }}" style="width: 95%" id="inputSuccess2" >
    </div>
    <div class="form-group">
        <!-- <label>Gelombang</label>
        <select name="gel" class="form-cont7ol">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        </select>
    </div> -->
    <div class="form-group">
        <label>Kode Sekolah</label>
        <input type="text" name="kodesekolah" maxlength="15" value="{{ old('kodesekolah') }}" style="width: 95%" id="inputSuccess2" >
    </div>
    <div class="form-group">
        <label>Kebutuhan Khusus</label>
        <input type="radio" name="kebutuhankhusus" {{ old('kebutuhankhusus')=="1"?'checked':'' }} class="flat" value="1" id="inputSuccess2"> Ya
        <input type="radio" name="kebutuhankhusus" {{ old('kebutuhankhusus')=="0"?'checked':'' }} class="flat" value="0" id="inputSuccess2"> Tidak
    </div>
    <div class="form-group">
        <label>Transportasi</label>
        <select name="transportasi" class="7orm-control">
        <option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
        <option value="Kendaraan Umum">Kendaraan Umum</option>
        <option value="Jalan Kaki">Jalan Kaki</option>
        </select>
    </div>
    <div class="form-group">
        <label>Tinggal</label>
        <select name="tinggal" class="form-7ontrol">
        <option value="Kendaraan Pribadi">Bersama Orangtua</option>
        <option value="Kendaraan Umum">Bersama Saudara</option>
        <option value="Jalan Kaki">Pesantren</option>
        <option value="Jalan Kaki">Kost</option>
        <option value="Jalan Kaki">Lainnya</option>
        </select>
    </div>
    <div class="form-group">
        <label>Jumlah Saudara</label>
        <input type="number" name="jmlsaudara" maxlength="13" value="{{ old('jmlsaudara') }}" style="width: 95%" id="inputSuccess2">
    </div>
    <div class="form-group">
        <label>Jarak</label>
        <input type="text" name="jarak" maxlength="13" value="{{ old('jarak') }}" style="width: 95%" id="inputSuccess2">
    </div>
    <div class="form-group">
        <label>Keterangan Jarak</label>
        <input type="text" name="ketjarak" maxlength="13" value="{{ old('ketjarak') }}" style="width: 95%" id="inputSuccess2">
    </div>
    <div class="form-group">
        <label>Waktu</label>
        <input type="text" name="waktu" maxlength="13" value="{{ old('waktu') }}" style="width: 95%" id="inputSuccess2">
    </div>
    <div class="form-group">
        <label>Keterangan Waktu</label>
        <input type="text" name="ketwaktu" maxlength="13" value="{{ old('ketwaktu') }}" style="width: 95%" id="inputSuccess2">
    </div>
    <div class="form-group">
        <label>Penerima KIP</label>
        <input type="radio" name="kipksp" {{ old('kipksp')=="1"?'checked':'' }} class="flat" value="1" id="inputSuccess2"> Ya
        <input type="radio" name="kipksp" {{ old('kipksp')=="0"?'checked':'' }} class="flat" value="0" id="inputSuccess2"> Tidak
    </div>
    <div class="form-group">
        <label>Bukan Penerima KIP</label>
        <input type="radio" name="nokipksp" {{ old('nokipksp')=="1"?'checked':'' }} class="flat" value="1" id="inputSuccess2"> Ya
        <input type="radio" name="nokipksp" {{ old('nokipksp')=="0"?'checked':'' }} class="flat" value="0" id="inputSuccess2"> Tidak
    </div>
</div>