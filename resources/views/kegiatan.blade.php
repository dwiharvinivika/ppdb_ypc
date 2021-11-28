@extends('layouts.master')

@section('content')
<section id="content">
    <div class="container">
        <div class="row">
            <div class="span12">
                <ul class="portfolio-categ filter">
                    <li class="all active"><a href="#">Semua</a></li>
                    @foreach (setting('kategori_tags')['kegiatan'] as $kegiatan)
                        <li class="{{ $kegiatan }}"><a href="#">{{ $kegiatan }}</a></li>
                    @endforeach
                </ul>
                <div class="clearfix"></div>
                <div class="row">
                    <section id="projects">
                        <ul id="thumbs" class="grid cs-style-4 portfolio">
                            @foreach (App\Models\Gallery::where('kategori', 'kegiatan')->get() as $gallery)
                                <!-- Item Project and Filter Name -->
                                <li class="item-thumbs span6 {{ implode(' ',json_decode($gallery->tags, true)) }}" data-id="id-{{ $loop->iteration }}" data-type="{{ json_decode($gallery->tags, true)[[0]] }}">
                                    <div class="item">
                                    <figure>
                                        <div><img src="{{ asset('galleries/'.$gallery->url) }}" alt=""/></div>
                                        <figcaption>
                                        <div>
                                            <span>
                                                <a href="{{ asset('galleries/'.$gallery->url) }}" data-pretty="prettyPhoto[gallery1]" title="{{ $gallery->title }} ({{ implode(' ',json_decode($gallery->tags, true)) }})"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
                                            </span>
                                            <span>
                                                <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
                                            </span>
                                        </div>
                                        </figcaption>
                                    </figure>
                                    </div>
                                </li>
                                <!-- End Item Project -->
                            @endforeach
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
