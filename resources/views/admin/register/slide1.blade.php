    @livewire('register-form-jurusan', ['register' => $register??null])
    <label class="col-form-label col-md-2 col-sm-2 label-align">NISN</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="text" name="nisn" maxlength="15" value="{{ old('nisn', $register->nisn??'') }}" class="form-control" id="inputSuccess2" required>
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">NIK</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="text" name="nik" maxlength="15" value="{{ old('nik', $register->nik??'') }}" class="form-control" id="inputSuccess2" >
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Nama Lengkap</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="text" name="nama" maxlength="40" value="{{ old('nama', $register->nama??'') }}" class="form-control" id="inputSuccess2" >
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Tempat Lahir</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="text" name="tmp_lhr" maxlength="20" value="{{ old('tmp_lhr', $register->tmp_lhr??'') }}" class="form-control" id="inputSuccess2">
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Tanggal Lahir</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="date" name="tgl_lhr" maxlength="15" value="{{ old('tgl_lhr', $register->tgl_lhr??'') }}" class="form-control" id="inputSuccess2" >
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Jenis Kelamin</label>
    <div class="col-md-2 col-7  form-group has-feedback">
        <select name="jk" class="form-control">
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
        </select>
    </div>
    <div class="col-md-2 col-5  form-group has-feedback">
        <div class="input-group">
            <input type="number" placeholder="Tinggi" name="tb" min="0" value="{{ old('tb', $register->tb??'') }}" class="form-control" id="inputSuccess2">
            <div class="input-group-append">
                <div class="input-group-text">CM</div>
            </div>
        </div>
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Asal Sekolah</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <select name="sekolah" id="sekolah" class="form-control">
            <option value=""></option>
            @foreach (DB::table('asal_sekolah')->get() as $sekolah)
                <option value="{{ $sekolah->namasekolah }}" {{ $sekolah->namasekolah==old('sekolah', $register->sekolah??'')?'selected':'' }}>{{ $sekolah->namasekolah }}</option>
            @endforeach
        </select>
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Tahun Lulus</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="number" name="lulus_thn" min="2016" max="9999" value="{{ old('lulus_thn', $register->lulus_thn??'') }}" class="form-control" id="inputSuccess2" >
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Kontak (WA Aktif)</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="text" name="hp_siswa" maxlength="13" value="{{ old('hp_siswa', $register->hp_siswa??'') }}" class="form-control" id="inputSuccess2">
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Transportasi</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <select name="transportasi" class="form-control">
            <option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
            <option value="Kendaraan Umum">Kendaraan Umum</option>
            <option value="Jalan Kaki">Jalan Kaki</option>
        </select>
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Tinggal</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <select name="tinggal" class="form-control">
            <option value="Kendaraan Pribadi">Bersama Orangtua</option>
            <option value="Kendaraan Umum">Bersama Saudara</option>
            <option value="Jalan Kaki">Pesantren</option>
            <option value="Jalan Kaki">Kost</option>
            <option value="Jalan Kaki">Lainnya</option>
        </select>
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Jumlah Saudara</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <input type="number" name="jmlsaudara" maxlength="13" value="{{ old('jmlsaudara', $register->jmlsaudara??'') }}" class="form-control" id="inputSuccess2">
    </div>
    <label class="col-form-label col-md-2 label-align">Jarak</label>
    <div class="col-md-2 col-9 form-group has-feedback">
        <input type="number" name="jarak" min="0" max="13" value="{{ old('jarak', $register->jarak??'') }}" class="form-control" id="inputSuccess2">
    </div>
    <div class="col-md-2 col-3 form-group has-feedback">
        <select name="ketjarak" class="form-control">
            @foreach (['km', 'hm', 'dm', 'm', 'dll'] as $satuan)
                <option value="{{ $satuan }}" {{ old('ketjarak', $register->ketjarak??'')==$satuan?'selected':'' }}>{{ $satuan }}</option>
            @endforeach
        </select>
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Waktu</label>
    <div class="col-md-2 col-8  form-group has-feedback">
        <input type="number" name="waktu" max="12" min="0" value="{{ old('waktu', $register->waktu??'') }}" class="form-control" id="inputSuccess2">
    </div>
    <div class="col-md-2 col-4 form-group has-feedback">
        <select name="ketwaktu" class="form-control">
            @foreach (['jam', 'menit'] as $satuan)
                <option value="{{ $satuan }}" {{ old('ketwaktu', $register->ketwaktu??'')==$satuan?'selected':'' }}>{{ $satuan }}</option>
            @endforeach
        </select>
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Kabupaten/Kota</label>
    <div class="col-md-4 col-4 form-group has-feedback">
        <select name="kabupaten" class="form-control" id="kabupaten">
            <option value="">----Pilih Kabupaten-----</option>
        </select>
    </div>
    <div style="display: none">
        <label class="col-form-label col-md-2 col-sm-2 label-align">Kecamatan</label>
        <div class="col-md-4 col-4 form-group has-feedback">
            <select name="kecamatan" class="form-control" id="kecamatan">

            </select>
        </div>
    </div>
    <div style="display: none">
        <label class="col-form-label col-md-2 col-sm-2 label-align">Kelurahan</label>
        <div class="col-md-4 col-4 form-group has-feedback">
            <select name="kelurahan" class="form-control" id="kelurahan">

            </select>
        </div>
    </div>
    <div id="rtrw" style="display: none">
        <label class="col-form-label col-md-2 label-align">RT/RW</label>
        <div class="col-md-2 col-9 form-group has-feedback">
            <input type="number" name="rt" min="0" max="13" value="{{ old('rt', $register->rt??'') }}" class="form-control" id="inputSuccess2">
        </div>
        <div class="col-md-2 col-9 form-group has-feedback">
            <input type="number" name="rw" min="0" max="13" value="{{ old('rw', $register->rw??'') }}" class="form-control" id="inputSuccess2">
        </div>
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Alamat Rumah</label>
    <div class="col-md-4 col-9 form-group has-feedback">
        <input type="text" name="alamat_rumah" min="0" max="13" value="{{ old('alamat_rumah', $register->alamat_rumah??'') }}" class="form-control" id="inputSuccess2">
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Kodepos/No.Rumah</label>
    <div class="col-md-2 col-9 form-group has-feedback">
        <input type="text" name="kodepos" placeholder="Kodepos" value="{{ old('kodepos', $register->kodepos??'') }}" class="form-control" id="inputSuccess2">
    </div>
    <div class="col-md-2 col-9 form-group has-feedback">
        <input type="text" name="no_rumah" placeholder="No Rumah" value="{{ old('no_rumah', $register->no_rumah??'') }}" class="form-control" id="inputSuccess2">
    </div>

    @push('js')
        <script>
            $('#sekolah').change(async function(){
                if($(this).val()=='SMP/MTS LAINNYA'){
                    const { value: namasekolah } = await Swal.fire({
                        title: 'Tambah Nama Sekolah',
                        input: 'text',
                        // inputLabel: 'Your namasekolah address',
                        inputPlaceholder: 'Masukan Nama Sekolah'
                    })

                    if (namasekolah) {
                        $.ajax({
                            url: '/tambah-nama-sekolah',
                            method: 'post',
                            data: {namasekolah, _token:$('input[name=_token]').val()},
                            success: (nm) => {
                                Swal.fire(`Sekolah ${nm} berhasil ditambahkan`);
                                $("#sekolah").append(`<option value="${nm}">${nm}</option>`)
                            },
                            error: function(err){
                                Swal.fire({
                                    title:`Sekolah ${namasekolah} sudah ada`,
                                    icon: 'error'
                                });
                            }
                        })
                    }
                }
            })
            function setOption(node, detail,id){
                $.ajax({
                    url: `http://www.emsifa.com/api-wilayah-indonesia/api/${detail}/${id}.json`,
                    async: false,
                    success: results => {
                        results.forEach(v=>{
                            $('#'+node).append(`<option value="${v.name}" data-id="${v.id}">${v.name}</option>`)
                        })
                    }
                })
            }
            setOption('kabupaten','regencies', 32); //Kode kabupaten tasikmalaya
            $("#kabupaten").on('change', function(){
                let id = $(this).find(':selected').data('id');
                $('#kecamatan').empty().append('<option></option>').parent().parent().fadeIn();
                setOption('kecamatan', 'districts', id);
            })
            $("#kecamatan").on('change', function(){
                let id = $(this).find(':selected').data('id');
                $('#kelurahan').empty().append('<option></option>').parent().parent().fadeIn();
                setOption('kelurahan', 'villages', id);
            })
            $('#kelurahan').on('change', function(){
                $('#rtrw').fadeIn();
            })
            let kabupaten = '{{ old("kabupaten", $register->kabupaten??"") }}';
            let kecamatan = '{{ old("kecamatan", $register->kecamatan??"") }}';
            let kelurahan = '{{ old("kelurahan", $register->kelurahan??"") }}';
            if(kabupaten){
                $('#kabupaten').val(kabupaten).trigger('change');
                if(kecamatan){
                    $('#kecamatan').val(kecamatan).trigger('change');
                    if(kelurahan){
                        $('#kelurahan').val(kelurahan).trigger('change');
                    }
                }
            }
        </script>
    @endpush
