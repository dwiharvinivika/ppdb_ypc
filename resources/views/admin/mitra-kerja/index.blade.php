@extends('layouts.admin.master_admin')

@section('content')
<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
        <div class="x_title">
            <h2><strong>Data Kerjasama</strong></h2>
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
                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <td colspan=6><a href="mitra-kerja/create" my='3' class="btn btn-xs btn-primary"><i class="fa fa-plus"></i> Tambah</a></td>
                                </tr>
                                @if(session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <tr>
                                    <th><center>No.</center></th>
                                    <th><center>Gambar</center></th>
                                    <th><center>Nama Perusahaan</center></th>
                                    <th><center>Keterangan</center></th>
                                    <th><center>Opsi</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mitra_kerja as $kerjasama)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img src="{{ asset('img/mitra-kerja/'.$kerjasama->gambar) }}" style="max-height: 100px" class="img-thumbnail" alt=""></td>
                                    <td>{{ $kerjasama->mitra_kerja }}</td>
                                    <td>{{ $kerjasama->keterangan }}</td>
                                    <td>
                                        <a href="mitra-kerja/{{ $kerjasama->id }}/edit" class="btn btn-sm btn-warning"> ubah </a>
                                        <form action="mitra-kerja/{{ $kerjasama->id }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-danger delete-data">Hapus</button>
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
