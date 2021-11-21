<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>@yield('title')PPDB SMK YPC Tasikmalaya</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Handlee|Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/bootstrap-responsive.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/camera.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/jquery.bxslider.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

  <!-- Theme skin -->
  <link href="{{ asset('color/default.css') }}" rel="stylesheet" />

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('ico/apple-touch-icon-144-precomposed.png') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('ico/apple-touch-icon-114-precomposed.png') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('ico/apple-touch-icon-72-precomposed.png') }}" />
  <link rel="apple-touch-icon-precomposed" href="{{ asset('ico/apple-touch-icon-57-precomposed.png') }}" />
  <link rel="shortcut icon" href="{{ asset('ico/favicon.png') }}" />
  @stack('css')
  <!-- =======================================================
    Theme Name: Eterna
    Theme URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

  <div id="wrapper">

    <!-- start header -->
    <header>
      <div class="top">
        <div class="container">
          <div class="row">
            <div class="span6">
              <p class="topcontact"><i class="icon-phone"></i> +62 088 999 123</p>
            </div>
            <div class="span6">

              <ul class="social-network">
                <li><a href="https://web.facebook.com/smkypc" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-white"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-white"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-white"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest  icon-white"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Google +"><i class="icon-google-plus icon-white"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Dribbble"><i class="icon-dribbble icon-white"></i></a></li>
              </ul>

            </div>
          </div>
        </div>
      </div>
      <div class="container">
        @include('layouts.navigasi')
      </div>
    </header>
    <!-- end header -->

    <!-- section featured -->
    @yield('content')

    <!-- /section featured -->

    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="row">
              <div class="span4">
                <div class="box flyLeft">
                  <div class="icon">
                    <i class="ico icon-circled icon-bgdark icon-star active icon-3x"></i>
                  </div>
                  <div class="text">
                    <h5>Teknik <strong>Kendaraan Ringan Otomotif</strong></h5>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                    </p>
                    <a href="#">Learn More</a>
                  </div>
                </div>
              </div>

              <div class="span4">
                <div class="box flyLeft">
                  <div class="icon">
                    <i class="ico icon-circled icon-bgdark icon-wrench active icon-3x"></i>
                  </div>
                  <div class="text">
                  <h5>Teknik <strong>dan Bisnis Sepeda Motor</strong></h5>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                    </p>
                    <a href="#">Learn More</a>
                  </div>
                </div>
              </div>
              <div class="span4">
                <div class="box flyRight">
                  <div class="icon">
                    <i class="ico icon-circled icon-bgdark icon-laptop active icon-3x"></i>
                  </div>
                  <div class="text">
                  <h5>Teknik <strong>Elektronika Industri</strong></h5>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                    </p>
                    <a href="#">Learn More</a>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="span12">
                <div class="solidline"></div>
               </div>
              </div>
              <div class="span4">
                <div class="box flyRight">
                  <div class="icon">
                    <i class="ico icon-circled icon-bgdark icon-laptop active icon-3x"></i>
                  </div>
                  <div class="text">
                  <h5>Teknik <strong>Komputer dan Jaringan</strong></h5>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                    </p>
                    <a href="#">Learn More</a>
                  </div>
                </div>
              </div>

              <div class="span4">
                <div class="box flyRight">
                  <div class="icon">
                    <i class="ico icon-circled icon-bgdark icon-laptop active icon-3x"></i>
                  </div>
                  <div class="text">
                  <h5>Rekayasa <strong>Perangkat Lunak</strong></h5>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                    </p>
                    <a href="#">Learn More</a>
                  </div>
                </div>
              </div>

              <div class="span4">
                <div class="box flyRight">
                  <div class="icon">
                    <i class="ico icon-circled icon-bgdark icon-camera active icon-3x"></i>
                  </div>
                  <div class="text">
                  <h5> <strong>Multimedia</strong></h5>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                    </p>
                    <a href="#">Learn More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="span12">
            <div class="solidline"></div>
          </div>
        </div>
        <div class="span4">
          <div class="box flyRight">
            <div class="icon">
              <i class="ico icon-circled icon-bgdark icon-laptop active icon-3x"></i>
            </div>
            <div class="text">
            <h5>Desain <strong>Pemodelan dan Informasi Gambar Bangunan</strong></h5>
              <p>
                Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
              </p>
              <a href="#">Learn More</a>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="span12">
            <div class="solidline"></div>
          </div>
        </div>
        @include('testi_alumni');
      </div>
    </section>

    @include('layouts.footer')
  </div>
  <a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bglight icon-2x active"></i></a>

  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="{{ asset('js/jquery.js') }}"></script>
  <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('js/bootstrap.js') }}"></script>

  <script src="{{ asset('js/modernizr.custom.js') }}"></script>
  <script src="{{ asset('js/toucheffects.js') }}"></script>
  <script src="{{ asset('js/google-code-prettify/prettify.js') }}"></script>
  <script src="{{ asset('js/jquery.bxslider.min.js') }}"></script>
  <script src="{{ asset('js/camera/camera.js') }}"></script>
  <script src="{{ asset('js/camera/setting.js') }}"></script>

  <script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
  <script src="{{ asset('js/portfolio/jquery.quicksand.js') }}"></script>
  <script src="{{ asset('js/portfolio/setting.js') }}"></script>

  <script src="{{ asset('js/jquery.flexslider.js') }}"></script>
  <script src="{{ asset('js/animate.js') }}"></script>
  <script src="{{ asset('js/inview.js') }}"></script>

  <!-- Template Custom JavaScript File -->
  <script src="{{ asset('js/custom.js') }}"></script>
  @stack('js')
</body>
</html>
