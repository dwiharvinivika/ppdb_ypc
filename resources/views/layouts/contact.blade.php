@extends('layouts.master')
@section('content')
<section id="content">
    <div class="container">
      <div class="row">
      <div class="span8">
                  <div class="post-image">
                    <div class="post-heading">
                      <h3><a href="#"><strong>SMK YPC</strong> Tasikmalaya</a></h3>
                    </div>

                    <img src="img/dummies/blog/rps.jpg" alt="" />
                  </div>

                </div>
      <div class="span4">
            <h4 class="title"><strong>Contact</strong> Kami</h4>
            <!-- start: Accordion -->
            <div class="accordion" id="accordion2">
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
								<i class="icon-home"></i> Alamat </a>
                </div>
                <div id="collapseOne" class="accordion-body collapse in">
                  <div class="accordion-inner">
                    
                  Jl. Komplek Yayasan Pesantren Cintawarna Singaparna RT/RW 009/004 Desa: Cikunten, Kecamatan: Singaparna, Kab/Kota: Kab. Tasikmalaya, Propinsi: Jawa Barat, Kode Pos: 46414
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
								<i class="icon-phone"></i>No. Telp.</a>
                </div>
                <div id="collapseTwo" class="accordion-body collapse">
                  <div class="accordion-inner"> 0265-546717 / 085223452021 / 08112224563</div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
								<i class="icon-envelope"></i>Email</a>
                </div>
                <div id="collapseThree" class="accordion-body collapse">
                  <div class="accordion-inner"> smkypctasikmalaya@gmail.com </div>
                </div>
              </div>
              
            </div>
            
            <!--end: Accordion -->

            <div class="blankline30"></div>
            <div class="solidline"></div>
            <div class="blankline20"></div>

          </div>

      </div>

      <!-- divider -->
  
      <!-- end divider -->

      
      <div class="blankline30"></div>

    </div>
  </section>
  @endsection