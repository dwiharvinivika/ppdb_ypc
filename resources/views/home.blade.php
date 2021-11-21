@extends('layouts.master')
@section('content')
<section id="featured">

      <!-- slideshow start here -->

      <div class="camera_wrap" id="camera-slide">

        <!-- slide 1 here -->
        <div data-src="img/slides/camera/slide1/img1.jpg">
          <div class="camera_caption fadeFromLeft">
            <div class="container">
              <div class="row">
                <div class="span6">
                  <h2 class="animated fadeInDown"><strong>Penerimaan Peserta Didik Baru <span class="colored"></strong></h2>
                  <p class="animated fadeInUp"> Untuk calon pendaftar masuk SMK YPC Tasikmalaya tahun ajaran 2021/2022 bisa mendaftar lewat website ini atau langsung datang ke kampus SMK YPC Tasikmalaya</p>
                  <a href="/register" class="btn btn-success btn-large animated fadeInUp">
											<i class="icon-link"></i> Daftar Sekarang
										</a>
                    <a href="/register" class="btn btn-info btn-large animated fadeInUp">
											<i class="icon-download"></i> Download Brosur
										</a>
                 
                </div>
                <div class="span6">
                  <img src="img/slides/camera/slide1/screen.png" alt="" class="animated bounceInDown delay1" />
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- slide 2 here -->
        <div data-src="img/slides/camera/slide2/img1.jpg">
          <div class="camera_caption fadeFromLeft">
            <div class="container">
              <div class="row">
                <div class="span6">
                  <img src="img/slides/camera/slide2/iMac.png" alt="" />
                </div>
                <div class="span6">
                  <h2 class="animated fadeInDown"><strong>Masukan <span class="colored">NISN</span></strong></h2>
                  <p class="animated fadeInUp"> Masukan NISN Anda untuk melihat hasil seleksi PPDB</p>
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
        </div>

        <!-- slide 3 here -->
        <div data-src="img/slides/camera/slide2/img1.jpg">
          <div class="camera_caption fadeFromLeft">
            <div class="container">
              <div class="row">
                <div class="span12 aligncenter">
                  <h2 class="animated fadeInDown"><strong><span class="colored">7 JURUSAN</span> sudah <span class="colored">Terakreditasi A</span> </strong></h2>
                  <p class="animated fadeInUp">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                  <img src="img/slides/camera/slide3/browsers.png" alt="" class="animated bounceInDown delay1" />
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- slideshow end here -->

    </section>
@endsection
