<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Register</title>
    <!-- Bootstrap -->
    <link href="{{asset('backend') }}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('backend') }}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('backend') }}/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{asset('backend') }}/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('backend') }}/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{asset('backend') }}/build/css/custom.min.css" rel="stylesheet">
    <style>
        @media (min-width: 480px) {
            .container{ max-width: 460px; }
        }
        @media (min-width: 768px) {
            .container{ max-width: 746px; }
        }
        @media (min-width: 992px) {
            .container{ max-width: 860px; }
        }
        @media (min-width: 1200px) {
            .container{ max-width: 1080px; }
        }
        .container{ margin-top: 15px; }
    </style>
    @livewireStyles
</head>
<body>
    <div class="container">
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

    <!-- jQuery -->
    <script src="{{asset('backend') }}/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{asset('backend') }}/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('backend') }}/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- DateJS -->
    <script src="{{asset('backend') }}/vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('backend') }}/vendors/moment/min/moment.min.js"></script>
    <script src="{{asset('backend') }}/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- iCheck -->
    <script src="{{asset('backend') }}/vendors/iCheck/icheck.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{asset('backend') }}/build/js/custom.js"></script>
    <!-- jQuery Smart Wizard -->
    <script src="{{ asset('js/app.js') }}"></script>
    @if (session()->has('success'))
        <script>
            Toast.fire({
                icon: 'success',
                title: "{{ session('success') }}"
            })
        </script>
    @endif
    <script src="{{asset('backend') }}/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    @livewireScripts
</body>
</html>
