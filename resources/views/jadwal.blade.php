@extends('layouts.master')

@section('content')
<section id="content">
    <div class="container">
        <div class="row">
            <div class="span12">
                <h4>Jadwal Pendaftaran</h4>
            </div>
           @foreach($gelombang as $g)
            <div class="span4">
                <div class="pricing-box-wrap special">
                    <div class="pricing-heading">
                        <h3>Gelombang {{ $g->gelombang}}</h3>
                    </div>
                    <div class="pricing-content">
                        <ul>
                            <li><i class="icon-ok"></i> Pendaftaran : {{ $g->pendaftaran }} </li>
                            <li><i class="icon-ok"></i> Pengumuman Hasil : {{ $g->pengumuman }} </li>
                            <li><i class="icon-ok"></i> Daftar Ulang : {{ $g->pengumuman }} s.d {{ $g->daftar_ulang }} </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- divider -->
        <div class="row">
            <div class="span12">
                <div class="solidline"></div>
            </div>
        </div>
        <!-- end divider -->
    </div>
</section>
@endsection
