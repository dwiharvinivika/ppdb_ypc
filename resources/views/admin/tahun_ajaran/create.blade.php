@extends('layouts.admin.master_admin')

@section('content')
				<div class="">
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Tahun Ajaran</h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								@if ($errors->any())
									<ul>
										@foreach ($errors->all() as $err)
											<li>{{ $err }}</li>
										@endforeach
									</ul>
								@endif
								<div class="x_content">
									<br />
									<form method="post" action="/admin/tahun_ajaran" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
	                                    @csrf
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align"
												for="first-name">Tahun Ajaran
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="tahun_ajaran" id="first-name" class="form-control @error('tahun_ajaran') is-invalid @enderror" value="{{ old('tahun_ajaran') }}">
												@error('tahun_ajaran')
													<div class="invalid-feedback"> {{ $message }}</div> 
												@enderror
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align"
												for="last-name">Status
											</label>
											<div class="col-md-6 col-sm-6 ">
												<select name="status" class="form-control">
													<option value="Aktif">Aktif</option>
													<option value="Tidak Aktif">Tidak Aktif</option>
												</select>
											</div>
										</div>
										
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												
												<button class="btn btn-primary" type="reset">Batal</button>
												<button type="submit" class="btn btn-success">Simpan</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			
@endsection