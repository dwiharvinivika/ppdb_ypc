@extends('layouts.admin.master_admin')

@section('content')
@csrf
<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Data <small>Siswa</small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
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
              <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th class="text-center">No.</th>
                    <th class="text-center">NISN</th>
                    <th class="text-center">Nama Peserta</th>
                    <th class="text-center">Tempat Tanggal Lahir</th>
                    <th class="text-center">JK</th>
                    <th class="text-center">Asal Sekolah</th>
                    <th class="text-center">Jurusan diterima</th>
                    <th class="text-center">Status Daftar Ulang</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($peserta as $pst)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pst->nisn }}</td>
                    <td>{{ $pst->nama }}</td>
                    <td>{{ $pst->ttl }}</td>
                    <td>{{ $pst->jk }}</td>
                    <td>{{ $pst->sekolah }}</td>
                    <td>
                        <select name="program" data-id="{{ $pst->peserta->id }}" class="form-control program">
                            @foreach ($jurusan as $j)
                                <option value="{{ $j }}" {{ $pst->peserta->program==$j?'selected':'' }}>{{ $j }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <input type="checkbox" name="daftar_ulang" data-id="{{ $pst->peserta->id }}"
                        data-off-text="Belum" data-on-text="Sudah" class="daftar_ulang" {{ $pst->peserta->daftar_ulang==1?'checked':'' }}>
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

@push('js')
    <script>
        $('input[name=daftar_ulang]').bootstrapSwitch()
        $('input[name=daftar_ulang]').on('switchChange.bootstrapSwitch', function(e) {
            let daftar_ulang = e.target.checked?1:0;
            let id = $(this).data('id');
            $.ajax({
                url: '/admin/siswa/'+id,
                method: 'post',
                data: {
                    _token: $('input[name=_token]').val(),
                    daftar_ulang
                },
                success: function(title){
                    Toast.fire({
                        icon: 'success',
                        title
                    })
                }
            })
        });
        $('.program').on('change', function(e) {
            let program = $(this).val();
            let id = $(this).data('id');
            $.ajax({
                url: '/admin/siswa/'+id,
                method: 'post',
                data: {
                    _token: $('input[name=_token]').val(),
                    program
                },
                success: function(title){
                    Toast.fire({
                        icon: 'success',
                        title
                    })
                }
            })
        });
    </script>
@endpush
