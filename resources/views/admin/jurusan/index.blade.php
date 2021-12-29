@extends('layouts.admin.master_admin')
@section('content')
<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Data <small>Jurusan</small></h2>
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
                    <td colspan=6><a href="jurusan/create" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah</a></td>
                  </tr>
                  @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                  @endif
                  <tr>
                    <th>No.</th>
                    <th>Logo</th>
                    <th>Kode Jurusan</th>
                    <th>Jurusan</th>
                    <th>Deskripsi</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($jurusan as $jurusan)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <img style="max-height: 130px;max-width: 85px;" src="{{ asset('img/jurusan/'.$jurusan->gambar)}}" alt="">
                    </td>
                    <td>{{ $jurusan->kode_jurusan }}</td>
                    <td>{!! $jurusan->jurusan !!}</td>
                    <td>{{ $jurusan->keterangan }}</td>
                    <td>
                        <a href="{{ route('jurusan.edit', $jurusan) }}" class="btn btn-sm btn-warning"> ubah </a>
                        <form action="{{ route('jurusan.destroy', $jurusan) }}}}" method="post" class="d-inline">
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
