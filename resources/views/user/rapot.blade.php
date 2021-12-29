@extends('layouts.admin.master_admin')

@section('content')
<div class="container">
    <div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_header">
                    Data Raport
                </div>
                <div class="x_content">
                    <div class="text-right">
                        *) Apabila data yang diisi tidak sesuai dengan raport asli siap diberi sanksi oleh sekolaj/dibatalkan kelulusanya! <br>
                        *) Untuk nilai raport PAI pada MTs yang mata pelajaran mengenai agamanya banyak silahkan untuk dihitung nilai rata-rata dari semua matpel agamanya
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row no-gutters">
                            @for ($a = 1; $a <= 5; $a++)
                                @if ($a!=1)
                                    <div class="col-12"><hr> </div>
                                @endif
                                <h2 class="col-12">Semester {{ $a }}</h2>
                                @for ($i = 1; $i <= 5; $i++)
                                <div class="col-md-2 col-6">
                                    <div class="form-group">
                                        <label for="{{ $a.'-'.$i }}">{{ str_replace('_',' ',$nilai[$i]) }}</label>
                                        <input type="number" id="{{ $a.'-'.$i }}" min="0" max="100" name="{{ $nilai[$i] }}[{{ $a }}]" class="form-control" value="{{ $values[$nilai[$i]][$a] }}">
                                    </div>
                                </div>
                                @endfor
                                <div class="col-md-2 col-6">
                                    <div class="form-group">
                                        <label for="bukti-{{ $a }}">Bukti</label>
                                        <div class="custom-file">
                                            <input type="file" name="semester[{{ $a }}]" accept="image/*" class="custom-file-input">
                                            <label for="" class="custom-file-label">Pilih Gambar</label>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                            <h2 class="col-12">Rangking</h2>
                            @for ($i = 1;  $i <= 5; $i++)
                                <div class="col-md-2 col-6">
                                    <div class="form-group">
                                        <label for="rangking-{{ $i }}">Semester {{ $i }}</label>
                                        <input type="number" min="0" max="50" id="rangking-{{ $i }}" name="rangking[{{ $i }}]" class="form-control" value="{{ $values['rangking'][$i] }}">
                                    </div>
                                </div>
                            @endfor
                            <div class="col-12">
                                <button class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
