@extends('layouts.admin.master_admin')
@section('content')
<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Data <small>Register</small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
          <div class="row">
              <div class="col-sm-12">
                <div class="card-box table-responsive">
        
        <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th><center>No.</center></th>
              <th><center>NISN</center></th>
              <th><center>Nama Peserta</center></th>
              <th><center>Tempat Tanggal Lahir</center></th>
              <th><center>JK</center></th>
              <th><center>Asal Sekolah</center></th>
              <th><center>Alamat Siswa</center></th>
              <th><center>Data Orang Tua</center></th>
              <th><center>Opsi</center></th>
            </tr>
          </thead>


          <tbody>
            @foreach( $register as $register)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $register->nisn }}</td>
              <td>{{ $register->nama }}</td>
              <td>{{ $register->tmp_lhr }}, {{ $register->tgl_lhr }}</td>
              <td>{{ $register->jk }}</td>
              <td>{{ $register->sekolah }}</td>
              <td>{{ $register->alamat_siswa }}</td>
              <td><a href="/admin/register/{{ $register->id }}" class="btn btn-sm btn-success"> Lihat </a></td>
              <td><a href="" class="btn btn-sm btn-warning"> ubah </a><a href="" class="btn btn-sm btn-danger"> Hapus </a></td>
            </tr>
           @endforeach

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
    </div>
  </div>

@endsection