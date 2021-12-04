@extends('layouts.admin.master_admin')

@section('content')
<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
        <div class="x_title">
            <h2><strong>Detail Testimoni Alumni</strong></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a> </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="card-box">
                <div class="d-flex">
                    <img src="{{ asset('img/avatars/'.$testimoni->avatar) }}" alt="" class="img-thumbnail">
                    <ul class="list-group ml-3 w-100">
                        <li class="list-group-item">Nama : {{ $testimoni->name }}</li>
                        <li class="list-group-item">Perusahaan : {{ $testimoni->company_name }}</li>
                        <li class="list-group-item">Pesan : {{ $testimoni->message }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
