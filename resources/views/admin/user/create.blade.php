@extends('layouts.admin.master_admin')

@section('content')
<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Tambah Data Admin</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a> </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $err)
                            <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                @endif
                <div class="x_content">
                    <form method="post" action="{{ route('user.store') }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                        @include('admin.user._form')
                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-4 col-sm-4 offset-md-3">
                                <button class="btn btn-primary" type="reset">Batal</button>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
