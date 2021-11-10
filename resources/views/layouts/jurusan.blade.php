@extends('layouts.master')
@section('content')
    
    <section id="content">
        <div class="container">
  
         
          <div class="row">
            <div class="span12">
              <div class="solidline"></div>
            </div>
          </div>
          @foreach( $jurusan as $jur)
          <div class="row">
            <div class="span6">
              <img src="img/lp/{{ $jur->gambar }}" alt="" class="flyLeft" />
            </div>
            <div class="span6">
              <div class="flyRight">
                <h4><strong><span class="colored">{{ $jur->kode_jurusan }}</span> ({{ $jur->jurusan }}) </strong></h4>
                
                <div class="blankline"></div>
                {{ $jur->keterangan }}
              </div>
            </div>
          </div>
          @endforeach


          <div class="row">
            <div class="span12">
              <div class="solidline"></div>
            </div>
          </div>
      </section>
@endsection