@php
    $register = auth()->user()->register;
    $banks = ['MANDIRI','BCA','BRI','Bank Syariah Indonesia', 'BTN', 'BJB', 'Lainya'];
@endphp

@extends('layouts.admin.master_admin')

@section('content')
<div class="container">
    <div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 ">
            @if ($errors->any())
                <ul class="alert alert-danger pl-4 font-weight-bold">
                    @foreach ($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
            @endif
			<div class="x_panel">
				<div class="x_header">
                    Pembayaran
                </div>
				<div class="x_content">
                    <h2>TIPE PEMBAYARAN :</h2>
                    <b><ul>
                        <li>PEMBAYARAN BISA LANGSUNG DILAKUKAN DI KAMPUS SMK YPC TASIKMALAYA</li>
                        <li>TRANSFER KE BANK MANDIRI SYARIAH : <br>
                            NO. REKENING : 7093332223 <br>
                            ATAS NAMA : SMK YPC TASIKMALAYA
                        </li>
                    </ul></b>
                    <form action="{{ route('user.pembayaran', $register->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="via">Tujuan Bank</label>
                                    <select name="via" id="via" class="form-control">
                                        @foreach ($banks as $bank)
                                            <option value="{{ $bank }}" {{ $bank==old('via', $register->pembayaran->via??'')?'selected':'' }}>{{ $bank }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="atas_nama">Nama Pengirim</label>
                                    <input type="text" class="form-control" name="atas_nama" value="{{ old('atas_nama', $register->pembayaran->atas_nama??'') }}" id="atas_nama">
                                </div>
                                <div class="form-group">
                                    <label>Bukti Pembayaran</label>
                                    <div class="custom-file">
                                        <input type="file" id="bukti" name="bukti" class="custom-file-input">
                                        <label for="bukti" class="custom-file-label">Silahkan Pilih Gambar Bukti Pembayaran</label>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <button class="btn btn-success w-100">Kirim</button>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                @if ($register->pembayaran)
                                    <img src="{{ asset('storage/bukti/'.$register->pembayaran->bukti) }}" id="preview-img" alt="" class="img-thumbnail">
                                @else
                                    <img src="{{ asset('img/bodybg/bg1.png') }}" id="preview-img" alt="" class="img-thumbnail">
                                @endif
                            </div>
                        </div>
                    </form>
                    @if(!is_null($register->pembayaran))
                    <table class="table table-bordered text-center mt-3">
                        <thead>
                            <th>NISN</th>
                            <th>NAMA CALON SISWA</th>
                            <th>TIPE PEMBAYARAN</th>
                            <th>STATUS</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $register->nisn }}</td>
                                <td>{{ $register->nama }}</td>
                                <td>{{ $register->pembayaran->jns_pembayaran }}</td>
                                <td>{!! $register->pembayaran->verified !!}</td>
                            </tr>
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
    <script>
        $('#bukti').on('change', function(){
            const [file] = $(this)[0].files;
            $(this).next().text(file.name)
            if(file){
                $('#preview-img').attr('src', URL.createObjectURL(file));
            }
        })
    </script>
@endpush
