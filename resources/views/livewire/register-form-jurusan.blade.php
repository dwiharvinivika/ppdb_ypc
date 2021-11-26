<div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Jurusan Pilihan 1</label>
    <div class="col-md-4 col-sm-4 form-group has-feedback">
        <select wire:model='jur1_id' name="jur1_id" class="form-control">
            <option value="0">--Pilih Jurusan--</option>
            @foreach ($jurusan->where('id', '!=', $jur2_id) as $item)
                <option value="{{ $item->id }}" {{ old('jur1_id', $register->jur1_id??'')==$item->id?'selected':'' }}>{{ $item->kode_jurusan }}</option>
            @endforeach
        </select>
    </div>
    <label class="col-form-label col-md-2 col-sm-2 label-align">Jurusan Pilihan 2</label>
    <div class="col-md-4 col-sm-4  form-group has-feedback">
        <select wire:model='jur2_id' name="jur2_id" class="form-control">
            <option value="0">--Pilih Jurusan--</option>
            @foreach ($jurusan->where('id', '!=', $jur1_id) as $item)
                <option value="{{ $item->id }}" {{ old('jur1_id', $register->jur2_id??'')==$item->id?'selected':'' }}>{{ $item->kode_jurusan }}</option>
            @endforeach
        </select>
    </div>
</div>
