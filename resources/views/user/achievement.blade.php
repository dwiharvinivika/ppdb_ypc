@extends('layouts.admin.master_admin')

@section('content')
<div class="container">
    <div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_header">
                    Data Prestasi
                </div>
                <div class="x_content">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nama Prestasi</label>
                                    <input type="text" name="nama_prestasi" value="{{ old('nama_prestasi') }}" class="form-control @error('nama_prestasi') is-invalid @enderror">
                                    <x-validation name="nama_prestasi"/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Jenis Prestasi</label>
                                    <select name="category" id="" class="form-control @error('category') is-invalid @enderror">
                                        <option value="">----Pilih----</option>
                                        <option value="1" {{ old('category')=='1'?'selected':'' }}>Akademik</option>
                                        <option value="2" {{ old('category')=='2'?'selected':'' }}>Non Akademik</option>
                                    </select>
                                    <x-validation name="category"/>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="">Juara</label>
                                    <select name="juara" id="" class="form-control @error('juara') is-invalid @enderror">
                                        <option value="">----Pilih----</option>
                                        @foreach ($categories as $category)
                                        <option value="{{ $category }}"  {{ old('juara')==$category?'selected':'' }}>{{ $category }}</option>
                                        @endforeach
                                    </select>
                                    <x-validation name="juara"/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Tunggal/Beregu</label>
                                    <select name="kelompok" id="" class="form-control @error('kelompok') is-invalid @enderror">
                                        <option value="">----Pilih----</option>
                                        <option value="tunggal"  {{ old('kelompok')=='tunggal'?'selected':'' }}>Tunggal</option>
                                        <option value="beregu"  {{ old('kelompok')=='beregu'?'selected':'' }}>Beregu</option>
                                    </select>
                                    <x-validation name="kelompok"/>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="">Bukti (jpg/jpeg/png)</label>
                                    <div class="custom-file">
                                        <input type="file" name="bukti" accept="image/*" class="custom-file-input @error('bukti') is-invalid @enderror">
                                        <label for="" class="custom-file-label">Pilih Gambar Bukti</label>
                                        <x-validation name="bukti"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-primary w-100" style="margin-top: 27px">Simpan</button>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-striped mt-4" id="datatable">
                            <thead class="bg-primary text-white">
                                <th>No</th>
                                <th>Nama Prestasi</th>
                                <th>Tingkat</th>
                                <th>Juara</th>
                                <th>Bukti</th>
                            </thead>
                            <tbody>
                                @foreach ($achievements as $achievement)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $achievement->nama_prestasi }}</td>
                                        <td>{{ $achievement->category==1?'Akademik':'Non Akademik' }}</td>
                                        <td>{{ $achievement->juara }}</td>
                                        <td class="text-right">
                                            <img src="{{ asset('images/bukti/'.$achievement->bukti) }}" style="max-width: 200px" alt="" class="img-thumbnail">
                                            <form action="{{ route('data-prestasi.delete', $achievement) }}" class="d-inline" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-sm btn-danger delete-data"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
