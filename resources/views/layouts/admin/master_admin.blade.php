<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>PPDB SMK YPC</title>

    <!-- Bootstrap -->
    <link href="{{asset('backend') }}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('backend') }}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('backend') }}/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('backend') }}/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{asset('backend') }}/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('backend') }}/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('backend') }}/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="{{asset('backend') }}/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('backend') }}/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('backend') }}/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('backend') }}/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('backend') }}/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Switch -->
    <link rel="stylesheet" href="{{ asset('backend/vendors/bootstrap-switch-3.3.4/dist/css/bootstrap3/bootstrap-switch.min.css') }}">
    <!-- Custom Theme Style -->
    <link href="{{asset('backend') }}/build/css/custom.min.css" rel="stylesheet">
    @stack('css')
    @livewireStyles()
    <style>
        .noscroll::-webkit-outer-spin-button,
        .noscroll::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        .noscroll {
            -moz-appearance: textfield;
        }
        .tahun_ajar{
            line-height: 30px;
            font-size: 17px;
        }
    </style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-user"></i> <span>PPDB SMK YPC!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset(auth()->user()->avatar) }}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Selamat Datang,</span>
                <h2>{{ auth()->user()->name }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            @include('layouts.admin.includes.sidebar')
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ url('logout') }}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <div class="nav toggle" style="width: unset">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
            <nav class="nav navbar-nav">
            <ul class=" navbar-right" style="margin-left: 0;padding-left: 0">
              <span class="tahun_ajar">
                  Tahun Ajaran <span id="tahun-ajaran">{{ App\Models\Tahun_Ajaran::where('status', 'Aktif')->first()->tahun_ajaran ??date('Y').'/'.(date('Y')+1) }}</span>
              </span>
              <li class="nav-item dropdown open" style="padding-left: 15px;">
                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                  <img src="{{ asset(auth()->user()->avatar) }}" alt="">{{ auth()->user()->name }}
                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ url('profile') }}"> Profile</a>
                  <a class="dropdown-item" href="{{ url('logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                </div>
              </li>

              {{-- Pesan --}}
              {{-- <li role="presentation" class="nav-item dropdown open">
                <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="badge bg-green">1</span>
                </a>
                <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="{{asset('backend') }}/images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <div class="text-center">
                      <a class="dropdown-item">
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </li> --}}
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          @yield('content')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            {{ setting('web_setting')['website_name'] }} All right reserved. By <a target="_blank" href="https://colorlib.com">Colorlib</a> and <a target="_blank" href="https://jangbe.github.io">Jangbe</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('backend') }}/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{asset('backend') }}/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="{{asset('backend') }}/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="{{asset('backend') }}/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="{{asset('backend') }}/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="{{asset('backend') }}/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('backend') }}/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- bootstrap-switch -->
    <script src="{{asset('backend/vendors/bootstrap-switch-3.3.4/dist/js/bootstrap-switch.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{asset('backend') }}/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="{{asset('backend') }}/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="{{asset('backend') }}/vendors/Flot/jquery.flot.js"></script>
    <script src="{{asset('backend') }}/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="{{asset('backend') }}/vendors/Flot/jquery.flot.time.js"></script>
    <script src="{{asset('backend') }}/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="{{asset('backend') }}/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="{{asset('backend') }}/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="{{asset('backend') }}/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="{{asset('backend') }}/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="{{asset('backend') }}/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="{{asset('backend') }}/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="{{asset('backend') }}/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="{{asset('backend') }}/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('backend') }}/vendors/moment/min/moment.min.js"></script>
    <script src="{{asset('backend') }}/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- Datatables -->
    <script src="{{asset('backend') }}/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('backend') }}/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="{{asset('backend') }}/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{asset('backend') }}/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="{{asset('backend') }}/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="{{asset('backend') }}/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{asset('backend') }}/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{asset('backend') }}/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="{{asset('backend') }}/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="{{asset('backend') }}/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{asset('backend') }}/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="{{asset('backend') }}/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="{{asset('backend') }}/vendors/jszip/dist/jszip.min.js"></script>
    <script src="{{asset('backend') }}/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="{{asset('backend') }}/vendors/pdfmake/build/vfs_fonts.js"></script>
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
    <script>
        $('.noscroll').on('mousewheel',function(){ $(this).blur() })
        $('.delete-data').on('click', function(e){
            e.preventDefault()
            Swal.fire({
                icon: 'warning',
                title: 'Apakah kamu yakin menghapusnya?',
                showCancelButton: true,
                cancelButtonText: 'Batal',
                confirmButtonText: 'Ya',
                cancelButtonColor: '#007bff',
                confirmButtonColor: '#dc3545',
            }).then(result=>{
                if(result.isConfirmed){
                    $(this).parent().submit()
                }
            })
        })
        $('input[type=file]').on('change', function(){
            const [file] = $(this)[0].files;
            $(this).next().text(file.name)
        })
    </script>
    <script src="{{asset('backend') }}/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    @stack('js')
    @livewireScripts
  </body>
</html>
