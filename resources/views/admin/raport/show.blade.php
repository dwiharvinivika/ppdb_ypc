@extends('layouts.admin.master_admin')

@section('content')
<div class="container">
    <div class="x_panel">
        <div class="x_header">
            Data Informasi
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-md-3">
                    @if (!is_null($register->foto)&&file_exists(public_path('storage/files-register/'.$register->foto)))
                        <img src="{{ asset('storage/files-register/'.$register->foto) }}" alt="" class="img-thumbnail w-100">
                    @else
                        <img src="{{ asset('images/Logo-SMK-YPC.png') }}" alt="" class="img-thumbnail w-100">
                    @endif
                </div>
                <div class="col-md-9">
                    <table class="table table-bordered">
                        <thead>
                            @foreach ($info as $key => $val)
                            <tr>
                                <th style="width: 100px;vertical-align: middle">{{ $key }}</th>
                                <th>{{ $val }}</th>
                            </tr>
                            @endforeach
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="x_panel">
        <div class="x_header">
            Data Nilai Raport
        </div>
        <div class="x_content table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="bg-secondary text-white">
                    <th>Semester</th>
                    <th>Matematika</th>
                    <th>Bahasa Indonesia</th>
                    <th>Bahasa Inggris</th>
                    <th>IPA</th>
                    <th>Pendidikan Agama Islam</th>
                    <th>Raport</th>
                </thead>
                <tbody>
                    @foreach ($register->raports as $raport)
                        <tr>
                            <td>{{ $raport->semester }}</td>
                            <td>{{ $raport->Matematika }}</td>
                            <td>{{ $raport->Bahasa_Indonesia }}</td>
                            <td>{{ $raport->Bahasa_Inggris }}</td>
                            <td>{{ $raport->IPA }}</td>
                            <td>{{ $raport->Pendidikan_Agama_Islam }}</td>
                            <td>
                                <a href="{{ asset('images/raports/'.$raport->bukti) }}" data-fslightbox="gallery" class="btn btn-sm btn-primary photoSwipe" data-caption="<h1>Raport Semester {{ $raport->semester }}</h1>">Lihat</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="x_panel">
        <div class="x_header">
            Data Prestasi
        </div>
        <div class="x_content table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="bg-secondary text-white">
                    <th>Nama Prestasi</th>
                    <th>Jenis Prestasi</th>
                    <th>Juara</th>
                    <th>Kelompok</th>
                    <th>Bukti</th>
                </thead>
                <tbody>
                    @foreach ($register->achievements as $achievement)
                        <tr>
                            <td>{{ $achievement->nama_prestasi }}</td>
                            <td>{{ $achievement->category==1?'Akademik':"Non Akademik" }}</td>
                            <td>{{ $achievement->juara }}</td>
                            <td>{{ $achievement->kelompok }}</td>
                            <td>
                                <a href="{{ asset('images/bukti/'.$achievement->bukti) }}" data-fslightbox="prestasi" class="btn btn-sm btn-primary photoSwipe" data-caption="<h1>Raport Semester {{ $achievement->semester }}</h1>">Lihat</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('js')
    <script src="{{ asset('js/fslightbox.js') }}"></script>
@endpush
