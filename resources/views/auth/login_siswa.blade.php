<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{asset('backend') }}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('backend') }}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('backend') }}/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset('backend') }}/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('backend') }}/build/css/custom.min.css" rel="stylesheet">
</head>
<body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="" method="POST">
              @csrf
              <h1>Login Peserta</h1>
              <div>
                <input type="number" class="form-control @error('code') is-invalid mb-1 @else mb-3 @enderror" placeholder="NISN" name="code" value="{{ old('code') }}"/>
                @error('code')
                    <div class="invalid-feedback" style="font-size: 14px">{{ $message }}</div>
                @enderror
              </div>
              <div>
                <input type="password" class="form-control @error('password') is-invalid mb-1 @else mb-1 @enderror" placeholder="Password" name="password"/>
                <div class="helper-text">Default sandi tanggal lahir contoh: 2003-09-15</div>
                @error('password')
                    <div class="invalid-feedback" style="font-size: 14px">{{ $message }}</div>
                @enderror
              </div>
              <div>
                <button class="btn btn-info submit" href="/admin/index">Log in</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>
                <br />

                <div>

                </section>
                  <p> ©2021 All Rights Reserved. SMK YPC PPDB</p>
                </div>
              </div>
            </form>
        </div>
      </div>
    </div>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @if (session()->has('success'))
        <script> Toast.fire({ icon: 'success', title: '{{ session("success") }}' }) </script>
    @endif
  </body>
</html>
