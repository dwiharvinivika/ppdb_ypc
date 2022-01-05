@extends('layouts.admin.master_admin')

@section('content')
<div class="col-md-12 col-sm-12 ">
    <x-errors-validation/>
    <div class="x_panel">
        <div class="x_title">
            <h2><strong>Web Setting</strong></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a> </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <form action="{{ url('admin/web_setting') }}" method="post" enctype="multipart/form-data">
                <div class="d-flex justify-content-center mb-4">
                    <img src="{{ $web_setting['logo'] }}" alt="" id="preview-logo" class="img-thumbnail w-50">
                </div>
                @csrf
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="website_name">Nama Website</label>
                            <input type="text" id="website_name" value="{{ old('website_name', $web_setting['website_name']) }}" name="website_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="no_telp">No Telepon</label>
                            <input type="text" id="no_telp" value="{{ old('no_telp', $web_setting['no_telp']) }}" name="no_telp" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email Website</label>
                            <input type="email" id="email" value="{{ old('email', $web_setting['email']) }}" name="email" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group form-row">
                            <div class="col-sm-8">
                                <label for="logo">Gambar Logo</label>
                                <input type="file" id="logo" value="{{ old('logo', $web_setting['logo']) }}" name="logo" class="form-control">
                            </div>
                            <div class="col-sm-4">
                                <label for="theme_color">Warna Tema</label>
                                <input type="color" id="theme_color" name="theme_color" value="{{ old('theme_color', $web_setting['theme_color']) }}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="alamat" cols="30" rows="4" class="form-control">{{ old('alamat', $web_setting['alamat']) }}</textarea>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary w-25">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection

@push('js')
    <script>
        $('#logo').on('change', function(){
            $(this).next().text($(this).val().split('\\').pop());
            const [file] = $(this)[0].files;
            if(file){
                $('#preview-logo').attr('src', URL.createObjectURL(file))
            }
        })
    </script>
@endpush
