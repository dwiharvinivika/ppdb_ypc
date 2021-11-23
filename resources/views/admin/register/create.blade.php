@extends('layouts.admin.master_admin')

@section('content')
<div class="container">
    <div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 ">
			<div class="x_panel">
				<div class="x_content">
                    @if (is_null($gelombang))
                        <div class="alert alert-warning">Gelombang Tidak Ditemukan!</div>
                    @else
                    <!-- Tabs -->
                    <form action="{{ $action }}" enctype="multipart/form-data" method="post">
                        <h4 class="text-center" style="margin-top: 10px">Gelombang Ke-{{ $gelombang->gelombang }} Tahun Ajaran {{ $gelombang->tahun_ajaran->tahun_ajaran }}</h4>
                        @if($errors->any())
                            <ul class="alert alert-danger">
                            @foreach($errors->all() as $err)
                            <li>{{ $err }}</li>
                            @endforeach
                            </ul>
                        @endif
                        @csrf
                        @if (request()->routeIs('register.edit'))
                            @method('put')
                        @endif
                        <div id="wizard" class="form_wizard wizard_horizontal" style="margin-top: 20px">
                            <ul class="wizard_steps">
                            <li>
                                <a href="#step-1">
                                <span class="step_no">1</span>
                                <span class="step_descr"> Step 1<br/> <small>Data Diri</small> </span>
                                </a>
                            </li>
                            <li>
                                <a href="#step-2">
                                <span class="step_no">2</span>
                                <span class="step_descr"> Step 2<br /> <small>Data Orangtua</small> </span>
                                </a>
                            </li>
                            <li>
                                <a href="#step-3">
                                <span class="step_no">3</span>
                                <span class="step_descr"> Step 3<br /> <small>Data File</small> </span>
                                </a>
                            </li>
                            </ul>
                            <div id="step-1">
                            @include('admin.register.slide1')
                            </div>
                            <div id="step-2">
                            @include('admin.register.slide2')
                            </div>
                            <div id="step-3">
                            @include('admin.register.slide3')
                            </div>
                        </div>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
