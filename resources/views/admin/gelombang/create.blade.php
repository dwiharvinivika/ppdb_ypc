@extends('layouts.admin.master_admin')

@section('content')
<div class="">
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 ">
			<div class="x_panel">
				<div class="x_title">
					<h2>Form Gelombang</h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
						<li><a class="close-link"><i class="fa fa-close"></i></a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<br />
					<form method="post" action="/admin/gelombang" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
					@csrf
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tahun Ajar </label>
						<div class="col-md-6 col-sm-6 ">
							<select name="tahun_ajaran_id" id="tahun_ajaran_id" class="form-control">
								@foreach (App\Models\Tahun_Ajaran::all() as $thn)
									<option value="{{ $thn->id }}">{{ $thn->tahun_ajaran }}</option>
								@endforeach
							</select>
							@error('tahun_ajaran_id')
								<div class="invalid-feedback"> {{ $message }}</div>
							@enderror
						</div>
					</div>
					<div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align"
								for="first-name">Gelombang
							</label>
							<div class="col-md-6 col-sm-6 ">
								<input type="number" min="0" name="gelombang" id="first-name"
									class="form-control @error('gelombang') is-invalid @enderror" value="{{ old('gelombang') }}">
									@error('gelombang')<div class="invalid-feedback"> {{ $message }}</div> @enderror
							</div>
						</div>
						<div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align"
								for="first-name">Pendaftaran
							</label>
							<div class="col-md-3 col-sm-3 ">
								<input type="date" name="pendaftaran_awal" id="first-name"
									class="form-control @error('pendaftaran_awal') is-invalid @enderror" value="{{ old('pendaftaran_awal') }}">
									@error('pendaftaran_awal')<div class="invalid-feedback"> {{ $message }}</div> @enderror
							</div>
							<div class="col-md-3 col-sm-3 ">
								<input type="date" name="pendaftaran_akhir" id="first-name"
									class="form-control @error('pendaftaran_akhir') is-invalid @enderror" value="{{ old('pendaftaran_akhir') }}">
									@error('pendaftaran_akhir')<div class="invalid-feedback"> {{ $message }}</div> @enderror
							</div>
						</div>
						<div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align"
								for="last-name">Pengumuman
							</label>
							<div class="col-md-6 col-sm-6 ">
								<input type="date" name="pengumuman" id="last-name" name="last-name"
									class="form-control @error('pengumuman') is-invalid @enderror" value="{{ old('pengumuman') }}">
									@error('pengumuman')<div class="invalid-feedback"> {{ $message }}</div> @enderror
							</div>
						</div>
						<div class="item form-group">
							<label for="daftar_ulang" class="col-form-label col-md-3 col-sm-3 label-align">Daftar Ulang</label>
							<div class="col-md-6 col-sm-6 ">
								<input id="daftar_ulang" name="daftar_ulang" class="form-control @error('daftar_ulang') is-invalid @enderror" type="date" value="{{ old('daftar_ulang') }}">
                                @error('daftar_ulang')<div class="invalid-feedback"> {{ $message }}</div> @enderror
							</div>
						</div>
						<div class="ln_solid"></div>
						<div class="item form-group">
							<div class="col-md-6 col-sm-6 offset-md-3">
								<button class="btn btn-primary" type="reset">Batal</button>
								<button class="btn btn-success">Simpan</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
