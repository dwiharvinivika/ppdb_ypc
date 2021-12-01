<table>
    <thead>
        <tr>
            <th align="center"><b>No</b></th>
            <th align="center"><b>NISN</b></th>
            <th align="center"><b>NO PESERTA</b></th>
            <th align="center"><b>NAMA PESERTA</b></th>
            <th align="center"><b>TEMPAT TANGGAL LAHIR</b></th>
            <th align="center"><b>JK</b></th>
            <th align="center"><b>ASAL SEKOLAH</b></th>
            <th align="center"><b>JURUSAN DITERIMA</b></th>
            <th align="center"><b>STATUS DAFTAR ULANG</b></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($registers as $register)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $register->nisn }}</td>
                <td>{{ $register->peserta->no_peserta }}</td>
                <td>{{ $register->nama }}</td>
                <td>{{ $register->ttl }}</td>
                <td>{{ $register->jk }}</td>
                <td>{{ $register->sekolah }}</td>
                <td>{{ $register->peserta->program->kode_jurusan }}</td>
                <td>{{ $register->peserta->daftar_ulang==1?'Sudah':'Belum' }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
