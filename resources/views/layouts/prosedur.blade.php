@extends('layouts.master')
@section('content')
<section id="content">
    <div class="container">
    @foreach($prosedur as $pros)
      <div class="row">
        <div class="span12">
          <article class="noborder">
            <div class="top-wrapper">
              <div class="post-heading">
                
                <h5><a href="#">{{ $pros->prosedur }}</a></h5>
              </div>
              <!-- start flexslider -->
              <div class="portfolio-detail">
                <img src="img/dummies/works/detail/{{ $pros->gambar }}" alt="" />
              </div>
              <!-- end flexslider -->
            </div>

            <p>
              Silakan ikuti prosedur pendaftaran seperti langkah di atas! <a href="/pendaftaran" class="btn btn-theme" type="submit">Daftar Sekarang</a>

            </p>

          </article>

         
        </div>

      </div>
    @endforeach
    </div>
    
  </section>
  @endsection
