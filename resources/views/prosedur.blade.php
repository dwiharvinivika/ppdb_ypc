@extends('layouts.master')

@section('content')
<section id="content">
    <div class="container">
        <div class="row">
            <div class="span12">
                <article class="noborder">
                    <div class="top-wrapper">
                        <div class="post-heading">
                            <h5><a href="#">{{ $pros->prosedur??'Prosedur Pendaftaran' }}</a></h5>
                        </div>
                        <!-- start flexslider -->
                        <div class="portfolio-detail">
                            <img src="{{ setting('prosedur')['gambar'] }}" alt="" />
                        </div>
                        <!-- end flexslider -->
                    </div>
                    <p>
                        Silakan ikuti prosedur pendaftaran seperti langkah di atas! <a href="/register" class="btn btn-theme" type="submit">Daftar Sekarang</a>
                    </p>
                </article>
            </div>
        </div>
    </div>
</section>
@endsection
