@extends('layouts.master')
@section('content')
<section id="content">
    <div class="container">


      <div class="row">
      @foreach($kerjasama as $ks)
        <div class="span3">
          <div class="service-box aligncenter flyLeft">
            <div class="icon">
            <img src="img/slides/camera/slide1/screen.png" alt="" class="animated bounceInDown delay1" />
            </div>
            <h5>{{ $ks->nama_perusahaan }} </h5>
            <p>
            {{ $ks->keterangan }}
            </p>

          </div>
        </div>
      @endforeach
      </div>

      

     

    </div>
  </section>
  @endsection