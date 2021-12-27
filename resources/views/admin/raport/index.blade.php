@extends('layouts.admin.master_admin')

@section('content')
<div class="container">
    <div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_header">
                    Data Nilai Raport
                </div>
                <div class="x_content table-responsive">
                    <table class="table table-striped" id="datatable" style="text-align: center;">
                        <thead class="bg-secondary text-white">
                            <tr>
                                <th rowspan="2" style="vertical-align: middle">No</th>
                                <th rowspan="2" style="vertical-align: middle">Nama Peserta</th>
                                <th colspan="5">Rata-rata Nilai Rapot</th>
                                <th rowspan="2" style="vertical-align: middle">Jumlah Nilai Prestasi</th>
                                <th rowspan="2" style="vertical-align: middle">Aksi</th>
                            </tr>
                            <tr>
                                <th>Sm 1</th>
                                <th>Sm 2</th>
                                <th>Sm 3</th>
                                <th>Sm 4</th>
                                <th>Sm 5</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($register as $r)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $r->nama }}</td>
                                    <td>{{ $r->avgRaportValue(1)??0 }}</td>
                                    <td>{{ $r->avgRaportValue(2)??0 }}</td>
                                    <td>{{ $r->avgRaportValue(3)??0 }}</td>
                                    <td>{{ $r->avgRaportValue(4)??0 }}</td>
                                    <td>{{ $r->avgRaportValue(5)??0 }}</td>
                                    <td>{{ $r->sum_achievement }}</td>
                                    <td>
                                        <a href="/admin/nilai-raport/{{ $r->id }}" class="btn btn-info">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
