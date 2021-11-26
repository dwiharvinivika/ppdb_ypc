@extends('layouts.admin.master_admin')
@section('content')
<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
        <div class="x_title">
            <h2>Data <small>Register</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a> </li>
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
                                    <td colspan="9"><a href="{{ route('register.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Data</a></td>
                                </tr>
                                <tr>
                                    <th>No</th>
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
                                    <td>
                                        <a href="{{ route('register.edit', $register) }}" class="btn btn-sm btn-warning"> ubah </a>
                                        <form action="{{ route('register.destroy', $register) }}" method="post">
                                            @csrf @method('delete')
                                            <button class="btn btn-sm btn-danger delete-data"> Hapus </button>
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
