@extends('layouts.admin.master_admin')
@section('content')
<div class="">
  <div class="page-title"></div>
    <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Form Registrasi</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">      
          <!-- Tabs -->
            <div id="wizard" class="form_wizard wizard_horizontal">
             <ul class="wizard_steps">
                <li>
                  <a href="#step-1">
                    <span class="step_no">1</span>
                      <span class="step_descr">
                        Step 1<br />
                          <small>Data Diri</small>
                      </span>
                  </a>
                </li>
                <li>
                  <a href="#step-2">
                      <span class="step_no">2</span>
                        <span class="step_descr">
                          Step 2<br />
                            <small>Data Orangtua</small>
                        </span>
                  </a>
                 </li>
                  <li>
                    <a href="#step-3">
                      <span class="step_no">3</span>
                        <span class="step_descr">
                          Step 3<br />
                            <small>Data File</small>
                        </span>
                    </a>
                  </li>
                </ul>
                <div id="step-1">
                <form class="form-label-left input_mask" method="post" action="/admin/register">
                  @csrf  
                <label class="col-form-label col-md-2 col-sm-2 label-align">Jurusan Pilihan 1</label>
                    <div class="col-md-4 col-sm-4  form-group has-feedback">
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
                    <input type="text" name="nisn" maxlength="15" class="form-control" id="inputSuccess2" required>
                    </div>
                  <label class="col-form-label col-md-2 col-sm-2 label-align">NIK</label>
                    <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <input type="text" name="nik" maxlength="15" class="form-control" id="inputSuccess2" >
                    </div>
                    <label class="col-form-label col-md-2 col-sm-2 label-align">Nama Lengkap</label>
                    <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <input type="text" name="nama" maxlength="40" class="form-control" id="inputSuccess2" >
                    </div>
                  <label class="col-form-label col-md-2 col-sm-2 label-align">Tempat Lahir</label>
                    <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <input type="text" name="tmp_lhr" maxlength="50" class="form-control" id="inputSuccess2">
                    </div>
                    <label class="col-form-label col-md-2 col-sm-2 label-align">Tanggal Lahir</label>
                    <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <input type="date" name="tgl_lhr" maxlength="15" class="form-control" id="inputSuccess2" >
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
                    <input type="text" name="sekolah" maxlength="50" class="form-control" id="inputSuccess2" >
                    </div>
                  <label class="col-form-label col-md-2 col-sm-2 label-align">Peringkat</label>
                    <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <input type="number" name="peringkat" class="form-control" id="inputSuccess2">
                    </div>
                  <label class="col-form-label col-md-2 col-sm-2 label-align">Alamat Lengkap</label>
                    <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <textarea name="alamat_siswa" Maxlength="100" class="form-control"></textarea>
                    </div>
                  <label class="col-form-label col-md-2 col-sm-2 label-align">Tinggi Badan (cm)</label>
                    <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <input type="number" name="tb" class="form-control" id="inputSuccess2">
                    </div>
                  <label class="col-form-label col-md-2 col-sm-2 label-align">Tahun Lulus</label>
                    <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <input type="text" name="lulus_thn" maxlength="4" class="form-control" id="inputSuccess2" >
                    </div>
                  <label class="col-form-label col-md-2 col-sm-2 label-align">Kontak</label>
                    <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <input type="text" name="hp_siswa" maxlength="13" class="form-control" id="inputSuccess2">
                    </div>
                  <label class="col-form-label col-md-2 col-sm-2 label-align">Tanggal Registrasi</label>
                    <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <input type="date" name="tgl_reg" maxlength="15" class="form-control" id="inputSuccess2" >
                    </div>
                  <label class="col-form-label col-md-2 col-sm-2 label-align">Gelombang</label>
                    <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <select name="gel" class="form-control">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                    </select>
                    </div>
                  <label class="col-form-label col-md-2 col-sm-2 label-align">Foto</label>
                    <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <input type="text" name="foto" class="form-control" id="inputSuccess2" >
                    </div>
                  <label class="col-form-label col-md-2 col-sm-2 label-align">Ijazah</label>
                    <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <input type="text" name="ijazah"  class="form-control" id="inputSuccess2">
                    </div>
                  <label class="col-form-label col-md-2 col-sm-2 label-align">Kode Sekolah</label>
                    <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <input type="text" name="kodesekolah" maxlength="15" class="form-control" id="inputSuccess2" >
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
                    <input type="number" name="jmlsaudara" maxlength="13" class="form-control" id="inputSuccess2">
                    </div>
                  <label class="col-form-label col-md-2 col-sm-2 label-align">Jarak</label>
                    <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <input type="text" name="jarak" maxlength="13" class="form-control" id="inputSuccess2">
                    </div>
                  <label class="col-form-label col-md-2 col-sm-2 label-align">Keterangan Jarak</label>
                    <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <input type="text" name="ketjarak" maxlength="13" class="form-control" id="inputSuccess2">
                    </div>
                    <label class="col-form-label col-md-2 col-sm-2 label-align">Waktu</label>
                    <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <input type="text" name="waktu" maxlength="13" class="form-control" id="inputSuccess2">
                    </div>
                  <label class="col-form-label col-md-2 col-sm-2 label-align">Keterangan Waktu</label>
                    <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <input type="text" name="ketwaktu" maxlength="13" class="form-control" id="inputSuccess2">
                    </div>
                  <label class="col-form-label col-md-2 col-sm-2 label-align">Penerima KIP</label>
                    <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <input type="radio" name="kipksp"  class="flat"  id="inputSuccess2"> Ya
                    <input type="radio" name="kipksp"  class="flat"  id="inputSuccess2"> Tidak
                    </div>
                  <label class="col-form-label col-md-2 col-sm-2 label-align">Bukan Penerima KIP</label>
                    <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <input type="radio" name="nokipksp"  class="flat"  id="inputSuccess2"> Ya
                    <input type="radio" name="nokipksp"  class="flat"  id="inputSuccess2"> Tidak
                    </div>
                    <label class="col-form-label col-md-2 col-sm-2 label-align"></label>
                    <div class="col-md-4 col-sm-4  form-group has-feedback">
                    
                    </div>
										<div class="form-group">
											<div class="col-md-9 col-sm-9  offset-md-3">
												<input type="submit" value="Simpan" class="btn btn-success">
                        <input type="reset" value="Batal" class="btn btn-danger">
											</div>
										</div>

								</form>

              

                
              </div>

              <div id="step-2">
                <form class="form-label-left input_mask" method="post" action="admin/register">
                  @csrf
                <label class="col-form-label col-md-2 col-sm-2 label-align">NISN</label>
                    <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <input type="text" name="nisn" maxlength="15" class="form-control" id="inputSuccess2" required>
                    </div>
                  <label class="col-form-label col-md-2 col-sm-2 label-align">Nama Ayah</label>
                    <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <input type="text" name="nama_ayah" maxlength="30" class="form-control" id="inputSuccess2" >
                    </div>
                  <label class="col-form-label col-md-2 col-sm-2 label-align">Nama Ibu</label>
                    <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <input type="text" name="nama_ibu" maxlength="30" class="form-control" id="inputSuccess2" >
                    </div>
                  <label class="col-form-label col-md-2 col-sm-2 label-align">Pekerjaan Ayah</label>
                    <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <select name="pekerjaan_ayah" class="form-control">
                      <option value="Buruh">Buruh</option>
                      <option value="Wiraswasta">Wiraswasta</option>
                      <option value="Wiraswasta">Wirausaha</option>
                      <option value="Pedagang">Pedagang</option>
                      <option value="Guru">Guru</option>
                      <option value="PNS">PNS</option>
                      <option value="Polisi">Polisi</option>
                      <option value="TNI">TNI</option>
                      <option value="Lainnya">Lainnya</option>
                    </select>
                    </div>
                  <label class="col-form-label col-md-2 col-sm-2 label-align">Pekerjaan Ibu</label>
                    <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <select name="pekerjaan_ayah" class="form-control">
                      <option value="Buruh">Buruh</option>
                      <option value="Wiraswasta">Wiraswasta</option>
                      <option value="Wiraswasta">Wirausaha</option>
                      <option value="Pedagang">Pedagang</option>
                      <option value="Guru">Guru</option>
                      <option value="PNS">PNS</option>
                      <option value="Polwan">Polwan</option>
                      <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                      <option value="Lainnya">Lainnya</option>
                    </select>
                    </div>
                    <label class="col-form-label col-md-2 col-sm-2 label-align">Nama Wali</label>
                    <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <input type="text" name="nama_wali" maxlength="40" class="form-control" id="inputSuccess2" >
                    </div>
                  <label class="col-form-label col-md-2 col-sm-2 label-align">Pekerjaan Wali</label>
                    <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <select name="pekerjaan_ayah" class="form-control">
                      <option value="Buruh">Buruh</option>
                      <option value="Wiraswasta">Wiraswasta</option>
                      <option value="Wiraswasta">Wirausaha</option>
                      <option value="Pedagang">Pedagang</option>
                      <option value="Guru">Guru</option>
                      <option value="PNS">PNS</option>
                      <option value="Polisi">Polisi</option>
                      <option value="TNI">TNI</option>
                      <option value="Lainnya">Lainnya</option>
                    </select>
                    </div>
                  <label class="col-form-label col-md-2 col-sm-2 label-align">Alamat Orangtua/Wali</label>
                    <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <textarea name="alamat_orangtua" Maxlength="100" class="form-control"></textarea>
                    </div>
                  <label class="col-form-label col-md-2 col-sm-2 label-align">Kontak</label>
                    <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <input type="text" name="hp_siswa" maxlength="13" class="form-control" id="inputSuccess2">
                    </div>
                  	<div class="form-group">
											<div class="col-md-9 col-sm-9  offset-md-3">
												<input type="submit" value="Simpan" class="btn btn-success">
                        <input type="reset" value="Batal" class="btn btn-danger">
											</div>
										</div>
								</form>
            </div>
            <div id="step-3">
                <form class="form-label-left input_mask">
                  <label class="col-form-label col-md-2 col-sm-2 label-align">Foto</label>
                    <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <input type="file" name="foto" class="form-control" id="inputSuccess2" >
                    </div>
                  <label class="col-form-label col-md-2 col-sm-2 label-align">Ijazah</label>
                    <div class="col-md-4 col-sm-4  form-group has-feedback">
                    <input type="file" name="ijazah"  class="form-control" id="inputSuccess2">
                    </div>
                  </form>
             

            
</div>
</div>
</div>
</div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection