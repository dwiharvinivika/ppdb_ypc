@extends('layouts.master')
@section('content')
<section id="featured">

<!-- opt in area for landing page -->
<div class="landing">
  <div class="container">
    <div class="row">
      <div class="span6">
        <img src="img/slides/camera/slide2/iMac.png" alt="" />
      </div>
      <div class="span6">
        <h5>Masukan <span class="coloblue"><strong>NISN</span></strong></h5>
        <p class="animated fadeInUp"> Silakan masukan NISN Anda pada saat pendaftaran untuk melihat hasil seleksi penerimaan peserta didik baru SMK YPC Tasikmalaya</p>
        <form action="hasil" method="GET">
          <div class="input-append">
            <input class="span3 input-large" name="nisn" type="text">
            <button class="btn btn-theme btn-large" type="submit">Cek</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

</section>
@endsection
