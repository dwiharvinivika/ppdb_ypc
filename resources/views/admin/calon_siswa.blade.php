@extends('layouts.admin.master_admin')
@section('content')
<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
        <div class="x_title">
            <h2>Data <small>Calon Siswa</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Settings 1</a>
                        <a class="dropdown-item" href="#">Settings 2</a>
                    </div>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box table-responsive">
                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>No Peserta</th>
                                <th>NISN</th>
                                <th>Nama Peserta</th>
                                <th>Tempat Tanggal Lahir</th>
                                <th>JK</th>
                                <th>Asal Sekolah</th>
                                <th>Alamat Siswa</th>
                                <th>Data Orang Tua</th>
                                <th>Opsi</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($peserta as $pst)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $pst->peserta->no_peserta }}</td>
                                    <td>{{ $pst->nisn }}</td>
                                    <td>{{ $pst->nama }}</td>
                                    <td>{{ $pst->ttl }}</td>
                                    <td>{{ $pst->jk=='L'?'Laki-laki':'Perempuan' }}</td>
                                    <td>{{ $pst->sekolah }}</td>
                                    <td>{{ $pst->alamat_siswa }}</td>
                                    <td><a href="/admin/orangtua/{{ $pst->orangtua->id }}" class="btn btn-sm btn-success"> Lihat </a></td>
                                    <td>
                                        <form action="{{ route('cetak_kartu', $pst) }}" target="_blank" method="post">
                                            @csrf
                                            <button class="btn btn-success"><i class="fa fa-file"></i> Cetak</button>
                                        </form>
                                    </td>
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
