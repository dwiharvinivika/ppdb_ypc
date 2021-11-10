@extends('layouts.admin.master_admin')
@section('content')

				<div class="">
					
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Form Jurusan</h2>
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
									<form method="post" action="/admin/jurusan" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                    @csrf
                                
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align"
												for="first-name">Kode Jurusan
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="kode_jurusan" id="first-name" 
													class="form-control @error('kode_jurusan') is-invalid @enderror" value="{{ $jurusan->kode_jurusan }}">
                                                    @error('kode_jurusan')<div class="invalid-feedback"> {{ $message }}</div> @enderror
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align"
												for="first-name">Jurusan
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="jurusan" id="first-name" 
													class="form-control @error('jurusan') is-invalid @enderror" value="{{ $jurusan->jurusan }}">
                                                    @error('jurusan')<div class="invalid-feedback"> {{ $message }}</div> @enderror
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align"
												for="last-name">Gambar
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="gambar" id="last-name" name="last-name" 
													class="form-control @error('gambar') is-invalid @enderror" value="{{ $jurusan->gambar }}">
                                                    @error('gambar')<div class="invalid-feedback"> {{ $message }}</div> @enderror
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align"
												for="last-name">Deskripsi
											</label>
											<div class="col-md-6 col-sm-6 ">
												<textarea name="keterangan" class="form-control">
                                                {{ $jurusan->keterangan }}
                                                </textarea>
											</div>
										</div>
										
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												
												<button class="btn btn-primary" type="reset">Batal</button>
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