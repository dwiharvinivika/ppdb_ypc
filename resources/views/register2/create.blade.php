@extends('layouts.admin.master_admin')

@section('content')
<div class="container">
  @if (session()->has('success'))
    <div class="alert alert-success">{{ session()->get('success') }}</div>
  @endif
  @if($errors->any())
    <ul class="alert alert-danger">
      @foreach($errors->all() as $err)
        <li>{{ $err }}</li>
      @endforeach
    </ul>
  @endif

  @if (is_null($gelombang))
    <div class="alert alert-warning">Gelombang Tidak Ditemukan!</div>
  @else
    <!-- Tabs -->
    <form action="/admin/register" enctype="multipart/form-data" method="post">
      <h4 class="text-center" style="margin-top: 10px">Gelombang Ke-{{ $gelombang->gelombang }}</h4>
      @csrf
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
          @include('register2.slide1')
        </div>
        <div id="step-2">
          @include('register2.slide2')
        </div>
        <div id="step-3">
          @include('register2.slide3')
        </div>
      </div>
    </form>
  @endif
</div>
@endsection