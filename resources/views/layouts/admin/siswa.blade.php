@extends('layouts.admin.master_admin')
@section('content')
<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Data <small>Siswa</small></h2>
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
              <th><center>Jurusan diterima</center></th>
              <th><center>Status Daftar Ulang</center></th>
            
            </tr>
          </thead>


          <tbody>
            <tr>
              <td>1.</td>
              <td>9961653630</td>
              <td>Vika Dwi Harvini</td>
              <td>Tasikmalaya, 18-09-1996</td>
              <td>P</td>
              <td>SMP Negeri 2 Mangunreja</td>
              <td><select name="" class="form-control">
                    <option>RPL</option>
                    <option>TKJ</option>
                    </select>
              </td>
              
              <td><a href="" class="btn btn-sm btn-warning"> Sudah daftar ulang </a></td>
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