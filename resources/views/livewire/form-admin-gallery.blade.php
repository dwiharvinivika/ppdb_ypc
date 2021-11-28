<div>
    <div class="x_panel">
        <div class="x_title">
            <h2>Form Tambah Tags Kategori</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a> </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <form action="" wire:submit.prevent='addKegiatan' method="post">
                        <div class="form-group form-row">
                            <div class="col-9">
                                <input type="text" wire:model='nameKegiatan' class="form-control @error('name') is-invalid @enderror">
                                @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-3"><button class="btn btn-success w-100">Tambah</button></div>
                        </div>
                    </form>
                    <ul class="list-group">
                        @foreach ($listKategori['kegiatan'] as $i => $kegiatan)
                            <li class="list-group-item d-flex justify-content-between">
                                <span>{{ $kegiatan }}</span>
                                <button class="fa fa-trash text-danger bg-transparent border-0" wire:click='deleteKegiatan({{ $i }})'></button>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-6 col-sm-12">
                    <form action="" wire:submit.prevent='addFasilitas' method="post">
                        <div class="form-group form-row">
                            <div class="col-9">
                                <input type="text" wire:model='nameFasilitas' class="form-control @error('name') is-invalid @enderror">
                                @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-3"><button class="btn btn-success w-100">Tambah</button></div>
                        </div>
                    </form>
                    <ul class="list-group">
                        @foreach ($listKategori['fasilitas'] as $i => $fasilitas)
                            <li class="list-group-item d-flex justify-content-between">
                                <span>{{ $fasilitas }}</span>
                                <button class="fa fa-trash text-danger bg-transparent border-0" wire:click='deleteFasilitas({{ $i }})'></button>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="x_panel">
        <div class="x_title">
            <h2>Form Tambah Foto</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a> </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <form method="post" action="{{ $action }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                @csrf
                <div wire:ignore>
                    @if (request()->routeIs(['gallery.edit','gallery.update']))
                        @method('put')
                    @endif
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        @if ($url)
                            <img id="preview-img" src="{{ $url->temporaryUrl() }}" alt="" class="img-thumbnail w-100">
                        @else
                            <img id="preview-img" src="{{ $previewImg }}" alt="" class="img-thumbnail w-100">
                        @endif
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <div class="item form-group">
                            <label class="col-form-label col-md-2 col-sm-2 label-align"
                                for="title">Title
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $gallery->title??'') }}">
                                @error('title')<div class="invalid-feedback"> {{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-2 col-sm-2 label-align"
                                for="kategori">Kategori
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <select name="kategori" wire:model='kategori' id="kategori" class="form-control @error('kategori') is-invalid @enderror">
                                    <option value="kegiatan">Kegiatan</option>
                                    <option value="fasilitas">Fasilitas</option>
                                </select>
                                @error('kategori')<div class="invalid-feedback"> {{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-2 col-sm-2 label-align"
                                for="url">Gambar
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="file" wire:model='url' name="url" id="url" class="form-control @error('url') is-invalid @enderror">
                                @error('url')<div class="invalid-feedback"> {{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-2 col-sm-2 label-align"
                                for="tags">Tags
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <select name="tags[]" id="tags" wire:model='tags' multiple class="form-control @error('tags') is-invalid @enderror">
                                    @foreach ($listKategori[$kategori] as $tag)
                                        <option value="{{ $tag }}">{{ $tag }}</option>
                                    @endforeach
                                </select>
                                @error('tags')<div class="invalid-feedback"> {{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-2">
                                <button class="btn btn-primary" type="reset">Batal</button>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
