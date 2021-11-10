@extends('layouts.admin.master_admin')
@section('content')

				<div class="">
					
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Form Kegiatan</h2>
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
									<form method="post" action="/admin/kegiatan" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                                    @csrf
                                
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align"
												for="first-name">Kegiatan
											</label>
											<div class="col-md-6 col-sm-6 ">
                                                <select name="kegiatan" class="form-control @error('kegiatan') is-invalid @enderror" value="{{ old('kegiatan') }}">
                                                    @error('kegiatan')<div class="invalid-feedback"> {{ $message }}</div> @enderror>
                                                    <option value="MPLS">MPLS</option>
                                                    <option value="Pengembangan Diri">Pengembangan Diri</option>
                                                    <option value="Boarding School">Boarding School</option>
                                                    <option value="Ekstrakulikuler">Ekstrakulikuler</option>
                                                    <option value="Lainnya">Lainnya</option>
                                                </select>
												
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align"
												for="last-name">Gambar
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="file" name="gambar" id="last-name" name="last-name" 
													class="form-control @error('gambar') is-invalid @enderror" value="{{ old('gambar') }}">
                                                    @error('gambar')<div class="invalid-feedback"> {{ $message }}</div> @enderror
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align"
												for="first-name">Keterangan
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="keterangan" id="first-name" 
													class="form-control @error('keterangan') is-invalid @enderror" value="{{ old('keterangan') }}">
                                                    @error('keterangan')<div class="invalid-feedback"> {{ $message }}</div> @enderror
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