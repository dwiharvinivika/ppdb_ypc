@extends('layouts.admin.master_admin')
@section('content')

				<div class="">
					
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Edit Gelombang</h2>
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
									<form method="post" action="/admin/gelombang/{{ $gelombang->id }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                    @method('patch')
                                    @csrf
                                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align"
												for="first-name">Gelombang
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="number" name="gelombang" id="first-name" 
													class="form-control @error('gelombang') is-invalid @enderror" value="{{ $gelombang->gelombang }}">
                                                    @error('gelombang')<div class="invalid-feedback"> {{ $message }}</div> @enderror
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align"
												for="first-name">Pendaftaran
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="pendaftaran" id="first-name" 
													class="form-control @error('pendaftaran') is-invalid @enderror" value="{{ $gelombang->pendaftaran }}">
                                                    @error('pendaftaran')<div class="invalid-feedback"> {{ $message }}</div> @enderror
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align"
												for="last-name">Pengumuman
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="pengumuman" id="last-name" name="last-name" 
													class="form-control @error('pengumuman') is-invalid @enderror" value="{{ $gelombang->pengumuman }}">
                                                    @error('pengumuman')<div class="invalid-feedback"> {{ $message }}</div> @enderror
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name"
												class="col-form-label col-md-3 col-sm-3 label-align">Daftar Ulang</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="middle-name" name="daftar_ulang" class="form-control @error('daftar_ulang') is-invalid @enderror" type="text"
													name="middle-name" value="{{ $gelombang->daftar_ulang }}">
                                                    @error('daftar_ulang')<div class="invalid-feedback"> {{ $message }}</div> @enderror
											</div>
										</div>
										
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												
												
												<button type="submit" class="btn btn-success">Simpan Perubahan</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			
@endsection