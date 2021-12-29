@extends('layouts.admin.master_admin')

@section('content')
<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
        <div class="x_title">
            <h2>Detail <small>Orang Tua</small></h2>
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
                        <table  class="table table-striped">
                            <tbody>
                                @foreach ($ortu as $key => $val)
                                <tr>
                                    <td width="30%">{{ ucwords(str_replace('_',' ',$key)) }}</td>
                                    <td width="3%">:</td>
                                    <td>{{ is_array($val)?$val['nama']:$val }}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="3">
                                        <a href="/admin/register/{{ $ortu['anak']['id'] }}" class="btn btn-sm btn-success"> Kembali </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
