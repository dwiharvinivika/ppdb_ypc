@extends('layouts.master')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 col-sm-12 ">
      <div class="x_panel">
        <div class="x_title">
          <h2>Form Registrasi</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          @if (session()->has('success'))
              <div class="alert alert-success">{{ session()->get('success') }}</div>
          @endif
          <ul>
            @if($errors->any())
              @foreach($errors->all() as $err)
                <li>{{ $err }}</li>
              @endforeach
            @endif
          </ul>
          <!-- Tabs -->
          <form action="/admin/register" enctype="multipart/form-data" method="post">
            @csrf
            <div id="wizard" class="form_wizard wizard_horizontal">
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
                @include('register.slide1')
              </div>
              <div id="step-2">
                @include('register.slide2')
              </div>
              <div id="step-3">
                @include('register.slide3')
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- </div>
</div> -->
@endsection

@push('css')
  <link rel="stylesheet" href="{{ asset('backend/vendors/jQuery-Smart-Wizard/styles/smart_wizard.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/vendors/jQuery-Smart-Wizard/styles/demo_style.css') }}">
@endpush

@push('js')
    <!-- jQuery Smart Wizard -->
    <script src="{{asset('backend') }}/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <script>
      function init_SmartWizard() {
        // if (typeof ($.fn.smartWizard) === 'undefined') { return; }

        $('#wizard').on("stepContent", function(e, anchorObject, stepIndex, stepDirection) {
            console.log(stepIndex);
        });

        $('#wizard').smartWizard();

        $('#wizard_verticle').smartWizard({
            transitionEffect: 'slide'
        });

        $('.buttonNext').addClass('btn btn-success');
        $('.buttonPrevious').addClass('btn btn-primary');
        $('.buttonFinish').addClass('btn btn-info');

        $('.buttonFinish').on('click', function(){
            
        })
      };
      init_SmartWizard()
    </script>
@endpush