@extends('layouts.admin.master_admin')

@section('content')
<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
        <div class="x_title">
            <h2><strong>Prosedur Pendaftaran</strong></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a> </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="card-box">
                <form action="{{ url('admin/prosedur') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-10 col-sm-10">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gambar" accept="images/*">
                                <label for="" class="custom-file-label">Pilih Gambar</label>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2">
                            <button class="btn btn-sm btn-primary w-100">Upload</button>
                        </div>
                    </div>
                </form>
                <h2>Preview Gambar</h2>
                <img width="100%" id="preview-img" src="{{ url(setting('prosedur')['gambar']) }}" alt="Gambar Prosedur">
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
    <script>
        $('.custom-file-input').on('change', function(){
            $(this).next().text($(this).val().split('\\').pop());
            const [file] = $(this)[0].files;
            if(file){
                $('#preview-img').attr('src', URL.createObjectURL(file))
            }
        })
    </script>
@endpush
