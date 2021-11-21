@extends('layouts.master')
@section('content')
<section id="featured">

<!-- opt in area for landing page -->
<div class="landing">
  <div class="container">
    <div class="row">
      <div class="span6">
        <div class="video-container">
          <iframe src="http://player.vimeo.com/video/30585464?title=0&amp;byline=0">			</iframe>
        </div>
      </div>
      <div class="span6">
        <h5>Masukan <span class="coloblue"><strong>NISN</span></strong></h5>
        <p class="animated fadeInUp"> Silakan masukan NISN Anda pada saat pendaftaran untuk melihat hasil seleksi penerimaan peserta didik baru SMK YPC Tasikmalaya</p>
        <form>
          <div class="input-append">
            <input class="span3 input-large" type="text">
            <a href="/hasil" class="btn btn-theme btn-large" type="submit">Cek</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

</section>
@endsection