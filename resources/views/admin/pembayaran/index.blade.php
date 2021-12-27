@extends('layouts.admin.master_admin')

@section('content')
<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
        <div class="x_title">
            <h2>Data Register</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                <li><a class="close-link"><i class="fa fa-close"></i></a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                    @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $err)
                        <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                    @endif
                    <div class="card-box table-responsive">
                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th><center>No.</center></th>
                                    <th><center>NISN</center></th>
                                    <th><center>Nama Peserta</center></th>
                                    <th><center>Jenis Pembayaran</center></th>
                                    <th><center>Status Pembayaran</center></th>
                                    
                                    <th><center>Opsi</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $register as $register)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $register->nisn }}</td>
                                    <td>{{ $register->nama }}</td>
                                    <td>
                                        <select name="jenis_pembayaran" data-id="{{ $register->id }}" class="form-control jenis_pembayaran">
                                            <option value="">----</option>
                                            <option value="tunai" {{ ($register->pembayaran->jns_pembayaran??'')=='tunai'?'selected':'' }}>Tunai</option>
                                            <option value="transfer" {{ ($register->pembayaran->jns_pembayaran??'')=='transfer'?'selected':'' }}>Transfer</option>
                                        </select>
                                    </td>
                                    <td>{!! $register->status_pembayaran !!}</td>
                                    <td><a href="/admin/register/{{ $register->id }}" class="btn btn-sm btn-info"> Detail </a></td>
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
<div class="modal" tabindex="-1" id="example-modal">
    <form action="" id="form-action" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title">Pembayaran <span id="jns"></span> calon siswa <span id="nm_siswa"></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="jns_pembayaran">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">NISN</label>
                    <div class="col-md-8 col-sm-8  form-group has-feedback">
                        <input type="text" maxlength="15" disabled class="form-control" id="nisn" required>
                    </div>
                    <div id="tunai">
                        <input type="hidden" name="via" value="admin">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Atas Nama</label>
                        <div class="col-md-8 col-sm-8  form-group has-feedback">
                            <input type="text" name="atas_nama" id="atas_nama" maxlength="15" class="form-control">
                        </div>
                    </div>
                    <div id="transfer">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Bank</label>
                        <div class="col-md-8 col-sm-8  form-group has-feedback">
                            <select name="via" id="via" class="form-control">
                                <option value="BCA">BCA</option>
                                <option value="BRI">BRI</option>
                                <option value="MANDIRI">MANDIRI</option>
                                <option value="dll">dll</option>
                            </select>
                        </div>
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Bukti</label>
                        <div class="col-md-8 col-sm-8  form-group has-feedback">
                            <input type="file" name="bukti" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

@push('js')
    <script>
        $('.jenis_pembayaran').on('change', function(){
            let id = $(this).data('id');
            if($(this).val()=='')return 0;
            $.ajax({
                url: '/admin/register/'+id,
                success: (result)=>{
                    if($(this).val()=='tunai'){
                        $('#tunai').show()
                        $('#transfer').hide()
                        $('#via').attr('disabled', true)
                        $('#atas_nama').attr('disabled', false)
                    }else if($(this).val()=='transfer'){
                        $('#tunai').hide()
                        $('#transfer').show()
                        $('#via').attr('disabled', false)
                        $('#atas_nama').attr('disabled', true)
                    }
                    $('#form-action').attr('action', '/admin/pembayaran/'+id)
                    $('input[name=jns_pembayaran]').val($(this).val())
                    $('#nisn').val(result.nisn)
                    $('#example-modal').modal('show')
                    $('#jns').text($(this).val())
                    $('#nm_siswa').text(result.nama)
                }
            })
        })
    </script>
@endpush
