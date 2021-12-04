@extends('layouts.admin.master_admin')

@section('content')
@csrf
<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
        <div class="x_title">
            <h2><strong>Testimoni Alumni</strong></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a> </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="card-box table-responsive">
                <table id="table-testimoni" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Foto</th>
                            <th>Perusahaan</th>
                            <th>Diterima</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
    <script>
        var is_accepted = null;
        var table=$('#table-testimoni').DataTable({
            "processing": true,
            "serverSide": true,
            "bSort" : false,
            "ajax": {
                url: "",
                data: function(data){
                    data.is_accepted = is_accepted;
                }
            },
            // orderCellsTop: true,
            fixedHeader: false,
            "columns": [
                {data:"DT_RowIndex"},
                {data:"name"},
                {data:"image"},
                {data:"company_name"},
                {data:"is_accepted"},
                {data:"action",searchable:false,orderable:false,sortable:false}//action
            ],
        });

        function showAlert(opsi,id){
            let icon = opsi=='nerima'?'info':'warning';
            Swal.fire({
                icon,
                title: 'Apakah kamu yakin ingin me'+opsi,
                showCancelButton: true,
                cancelButtonText: 'batal'
            }).then(result=>{
                if(result.isConfirmed){
                    $.ajax({
                        url:'/admin/testimoni/'+id,
                        method: 'post',
                        data: {
                            _method:'put',
                            _token: $('input[name=_token]').val(),
                            is_accepted: opsi=='nerima'?1:0,
                        },
                        success: (action)=>{
                            Toast.fire({
                                icon:'success',
                                title: 'Berhasil di'+action
                            })
                            table.draw()
                        }
                    })
                }
            })
        }
        $('.hapus').on('click', function(){
            $.ajax({
                url: '/admin/testimoni/'+$(this).data('id'),
                method: 'post',
                data: {
                    _token: $('input[name=_token]').val(),
                    _method: 'delete'
                },
                success: ()=>{
                    Toast.fire({
                        icon: 'success',
                        title: 'Testimoni berhasil dihapus'
                    })
                    table.draw()
                }
            })
        })
    </script>
@endpush
