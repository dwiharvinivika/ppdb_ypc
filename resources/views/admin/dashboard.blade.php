@extends('layouts.admin.master_admin')

@section('content')
    <div class="">
      <div class="" style="display: inline-block;">
    </div>
    <div class="row">
      <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 ">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-users"></i></div>
          <div class="count">{{ $register->count() }}</div>
          <h3>Register</h3>
          <p>Jumlah Pendaftaran</p>
        </div>
      </div>
      <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 ">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-graduation-cap"></i></div>
          <div class="count">{{ $calon_siswa->count() }}</div>
          <h3>Calon Siswa</h3>
          <p>Jumlah Calon Siswa</p>
        </div>
      </div>
      @foreach ($jurusan as $nama => $id)
      <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 ">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-user"></i></div>
          <div class="count" style="line-height: 28px; font-size: 25px;padding-top: 4px;font-weight: normal">
              1. <b>{{ $register->where('jur1_id', $id)->count() }}</b> <br>
              2. <b>{{ $register->where('jur2_id', $id)->count() }}</b>
          </div>
          <h3>Calon Siswa</h3>
          <p>{{ strip_tags($nama) }}</p>
        </div>
      </div>
      @endforeach
    </div>

      <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Pendaftaran <small>Progres perbulan</small></h2>
              <ul class="nav navbar-right panel_toolbox ml-3">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Settings 1</a>
                      <a class="dropdown-item" href="#">Settings 2</a>
                    </div>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="filter">
                <div id="filter-date" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                  <i class="fa fa-calendar"></i>
                  <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <div class="col-md-9 col-sm-12 ">
                <div class="demo-container mt-2" style="height:280px">
                  <div id="chart_registrasi" class="demo-placeholder"></div>
                </div>
              </div>

              <div class="col-md-3 col-sm-12 ">
                <div>
                  <div class="x_title">
                    <h2>Admin dan Staff TU</h2>
                    <div class="clearfix"></div>
                  </div>
                  <ul class="list-unstyled top_profiles scroll-view">
                    @foreach ($admin as $user)
                      <li class="media event">
                        <a class="pull-left border-aero profile_thumb">
                            <i class="fa fa-user aero"></i>
                        </a>
                        <div class="media-body">
                          <a class="title" href="#">{{ $user->name }}</a>
                          <p> {{ $user->email }}</p>
                          <p> {{ $user->created_at->diffForHumans() }}</p>
                        </div>
                      </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection

@push('js')
    <script src="{{ asset('js/dashboard.js') }}"></script>
@endpush
