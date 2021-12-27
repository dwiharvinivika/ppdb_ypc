@extends('layouts.admin.master_admin')
@section('content')
<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Detail <small>Register</small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Settings 1</a>
                <a class="dropdown-item" href="#">Settings 2</a>
            </div>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a> </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="row">
          <div class="col-sm-12">
            <div class="card-box table-responsive">
              <table  class="table table-striped">
                <thead>
                  <tr>
                    <td width="30%">NISN</td>
                    <td width="3%">:</td>
                    <td>{{ $register->nisn }}</td>
                  </tr>
                  <tr>
                    <td width="30%">NIK</td>
                    <td width="3%">:</td>
                    <td>{{ $register->nik }}</td>
                  </tr>
                  <tr>
                    <td width="30%">Nama Siswa</td>
                    <td width="3%">:</td>
                    <td>{{ $register->nama }}</td>
                  </tr>
                  <tr>
                    <td width="30%">Tempat Lahir</td>
                    <td width="3%">:</td>
                    <td>{{ $register->tmp_lhr }}</td>
                  </tr>
                  <tr>
                    <td width="30%">Tanggal Lahir</td>
                    <td width="3%">:</td>
                    <td>{{ $register->tgl_lhr }}</td>
                  </tr>
                  <tr>
                    <td width="30%">Jenis Kelamin</td>
                    <td width="3%">:</td>
                    <td>{{ $register->jk=='L'?'Laki-laki':'Perempuan' }}</td>
                  </tr>
                  <tr>
                    <td width="30%">Asal Sekolah</td>
                    <td width="3%">:</td>
                    <td>{{ $register->sekolah }}</td>
                  </tr>
                  <tr>
                    <td width="30%">Alamat Siswa</td>
                    <td width="3%">:</td>
                    <td>{{ $register->alamat_siswa }}</td>
                  </tr>
                  <tr>
                    <td>Tinggi Badan</td>
                    <td>:</td>
                    <td>{{ $register->tb }}</td>
                  </tr>
                  <tr>
                    <td>Tahun Lulus</td>
                    <td>:</td>
                    <td>{{ $register->lulus_thn }}</td>
                  </tr>
                  <tr>
                    <td>Kontak</td>
                    <td>:</td>
                    <td>{{ $register->hp_siswa }}</td>
                  </tr>
                  <tr>
                    <td>Jurusan 1</td>
                    <td>:</td>
                    <td>{{ $register->jurusan(1) }}</td>
                  </tr>
                  <tr>
                    <td>Jurusan 2</td>
                    <td>:</td>
                    <td>{{ $register->jurusan(2) }}</td>
                  </tr>
                  <tr>
                    <td>Tanggal Registrasi</td>
                    <td>:</td>
                    <td>{{ $register->created_at }}</td>
                  </tr>
                  <tr>
                    <td>Gelombang</td>
                    <td>:</td>
                    <td>{{ $register->gelombang->id }}</td>
                  </tr>
                  <tr>
                    <td width="30%">Foto</td>
                    <td width="5%">:</td>
                    <td>{{ $register->foto}}</td>
                  </tr>
                  <tr>
                    <td width="30%">No Ijazah</td>
                    <td width="5%">:</td>
                    <td>{{ $register->ijazah }}</td>
                  </tr>
                  <tr>
                    <td width="30%">Asal Sekolah</td>
                    <td width="5%">:</td>
                    <td>{{ $register->sekolah }}</td>
                  </tr>
                  <tr>
                    <td width="30%">Transportasi</td>
                    <td width="5%">:</td>
                    <td>{{ $register->transportasi }}</td>
                  </tr>
                  <tr>
                    <td width="30%">Tinggal</td>
                    <td width="5%">:</td>
                    <td>{{ $register->tinggal }}</td>
                  </tr>
                  <tr>
                    <td width="30%">Jumlah Saudara</td>
                    <td width="5%">:</td>
                    <td>{{ $register->jmlsaudara }} bersaudara</td>
                  </tr>
                  <tr>
                    <td width="30%">Jarak</td>
                    <td width="5%">:</td>
                    <td>{{ $register->jarak }} {{ $register->ketjarak }}</td>
                  </tr>
                  <tr>
                    <td width="30%">Waktu</td>
                    <td width="5%">:</td>
                    <td>{{ $register->waktu }} {{ $register->ketwaktu }}</td>
                  </tr>
                  <tr>
                    <td colspan="3">
                        <a href="/admin/register" class="btn btn-sm btn-success"> Kembali </a>
                        <a href="/admin/orangtua/{{ $register->id }}" class="btn btn-sm btn-info"> Input Data Orangtua </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
