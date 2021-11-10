@extends('layouts.admin.master_admin')
@section('content')

				<div class="">
					
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Form Kerjasama</h2>
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
									<form method="post" action="/admin/kerjasama/{{ $kerjasama->id }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                    @method('patch')
                                    @csrf
                                
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align"
												for="first-name">Nama Perusahaan
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="nama_perusahaan" id="first-name" 
													class="form-control @error('nama_perusahaan') is-invalid @enderror" value="{{ $kerjasama->nama_perusahaan }}">
                                                    @error('nama_perusahaan')<div class="invalid-feedback"> {{ $message }}</div> @enderror
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align"
												for="last-name">Keterangan
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="keterangan" id="last-name" name="last-name" 
													class="form-control @error('keterangan') is-invalid @enderror" value="{{$kerjasama->keterangan }}">
                                                    @error('keterangan')<div class="invalid-feedback"> {{ $message }}</div> @enderror
											</div>
										</div>
										
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												
												<button type="submit" class="btn btn-success">Simpan  Perubahan</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			
@endsection