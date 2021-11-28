@extends('layouts.admin.master_admin')

@section('content')
<div class="">
    <div class="page-title">
      <div class="title_left">
        <h3> Media Gallery <small> gallery design</small> </h3>
      </div>

      <div class="title_right">
        <div class="col-md-3 col-sm-3 form-group pull-right top_search">
          <div class="input-group">
            <a href="{{ route('gallery.create') }}" class="btn btn-primary w-100">Tambah</a>
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="x_panel">
    <div class="row">
      <div class="col-md-12">
          <div class="x_title">
            <h2>Media Gallery <small> gallery design </small></h2>
            <ul class="nav navbar-right panel_toolbox">
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
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <div class="row">
                @foreach($galleries as $gallery)
                <div class="col-md-55">
                    <div class="thumbnail">
                        <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="{{ asset('galleries/'.$gallery->url) }}" alt="image" />
                            <div class="mask">
                                <p>{{ $gallery->title }}</p>
                                <div class="tools tools-bottom">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                    <a href="{{ route('gallery.edit', $gallery) }}"><i class="fa fa-pencil"></i></a>
                                    <form action="{{ route('gallery.destroy', $gallery) }}" class="d-inline" method="post">
                                        @method('delete')
                                        @csrf
                                        <button class="delete-data bg-transparent border-0 text-white"><i class="fa fa-times"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="caption"><p>{{ ucfirst($gallery->kategori) }} ({{ implode(', ',json_decode($gallery->tags, true)) }})</p> </div>
                    </div>
                </div>
                @endforeach
                @if($galleries->count()<1)
                    <div class="alert alert-warning w-100">Data Kosong</div>
                @endif
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
