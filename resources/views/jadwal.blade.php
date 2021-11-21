@extends('layouts.master')
@section('content')
    <section id="content">
        <div class="container">
  
  
  
          <div class="row">
            <div class="span12">
              <h4>Jadwal Pendaftaran</h4>
            </div>
           @foreach($gelombang as $gelombang)
            <div class="span4">
              <div class="pricing-box-wrap special">
                <div class="pricing-heading">
                  <h3>Gelombang {{ $gelombang->gelombang}}</h3>
                </div>
  
                <div class="pricing-content">
                  <ul>
                    <li><i class="icon-ok"></i> Pendaftaran : {{ $gelombang->pendaftaran }} </li>
                    <li><i class="icon-ok"></i> Pengumuman Hasil : {{ $gelombang->pengumuman }} </li>
                    <li><i class="icon-ok"></i> Daftar Ulang : {{ $gelombang->daftar_ulang }} </li>
                   
                  </ul>
                </div>
                <div class="pricing-action">
                  
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