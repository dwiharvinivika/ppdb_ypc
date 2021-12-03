@extends('layouts.admin.master_admin')
@section('content')
<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2><strong> Data Gelombang</strong></h2>
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
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                        <td colspan=7><a href="gelombang/create" my='3' class="btn btn-xs btn-primary"><i class="fa fa-plus"></i> Tambah</a></td>
                        </tr>
                        @if(session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <tr>
                        <th><center>No.</center></th>
                        <th><center>Tahun Ajaran</center></th>
                        <th><center>Gelombang</center></th>
                        <th><center>Pendaftaran</center></th>
                        <th><center>Pengumuman</center></th>
                        <th><center>Daftar Ulang</center></th>
                        <th><center>Opsi</center></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($gelombang as $gelombang)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $gelombang->tahun_ajaran->tahun_ajaran }}</td>
                            <td>{{ $gelombang->gelombang }}</td>
                            <td>{{ $gelombang->pendaftaran_awal.' / '.$gelombang->pendaftaran_akhir }}</td>
                            <td>{{ $gelombang->pengumuman }}</td>
                            <td>{{ $gelombang->daftar_ulang }}</td>
                            <td><a href="gelombang/{{ $gelombang->id }}/edit" class="btn btn-sm btn-warning"> ubah </a>                            <form action="gelombang/{{ $gelombang->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
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
