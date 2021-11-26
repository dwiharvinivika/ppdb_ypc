@extends('layouts.admin.master_admin')
@section('content')
<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
        <div class="x_title">
            <h2><strong>Tahun Ajaran</strong></h2>
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
                                    <td colspan=6><a href="tahun_ajaran/create" my='3' class="btn btn-xs btn-primary"><i class="fa fa-plus"></i> Tambah</a></td>
                                </tr>
                                @if(session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <tr>
                                    <th>No</th>
                                    <th>Tahun Ajaran</th>
                                    <th>Status</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tahun_ajaran as $tahun_ajaran)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{ $tahun_ajaran->tahun_ajaran }}</td>
                                    <td>{!! $tahun_ajaran->label_status !!}</td>
                                    <td>
                                        <a href="tahun_ajaran/{{ $tahun_ajaran->id }}/edit" class="btn btn-sm btn-warning"> Ubah </a>
                                        <form action="tahun_ajaran/{{ $tahun_ajaran->id }}" method="post" class="d-inline">
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
