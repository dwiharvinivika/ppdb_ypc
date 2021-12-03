<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kartu Siswa</title>
    <style>
        @page{
            margin: 5px;
        }
        .container{
            margin: 5px;
            padding: 5px;
            border: 1px solid rgb(100, 100, 100);
        }
        .header{
            display: flex;
        }
        .kop{
            width: 100%;
            text-align: center;
        }
        .kop h3{
            line-height: 5px;
        }
        .divider{
            border: 3px solid black;
        }
        table td{
            font-size: 20px;
            padding-top: 10px;
            vertical-align: top;
        }
        .content{
            padding-top: 14px;
        }
        .footer{
            display: flex;
            justify-content: end;
        }
        .ttd{
            margin-right: 40px;
            text-align: right;
            height: 150px;
        }
        .footer .ttd{
            padding-top: 10px;
            font-size: 20px;
            line-height: 0%;
        }
        .note h3{
            margin-top: 5px;
        }
        .note ul li{
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="{{ public_path('images/Logo-SMK-YPC.png') }}" alt="" srcset="" style="max-height: 110px; margin-top: 15px;">
            <div class="kop">
                <h3>KARTU PESERTA</h3>
                <h3>PENERIMAAN CALON PESERTA DIDIK BARU</h3>
                <h3 style="color: blue">SMK YPC TASIKMALAYA</h3>
                <h3>TAHUN {{ $peserta->gelombang->tahun_ajaran->tahun_ajaran }}</h3>
            </div>
        </div>
        <div class="divider"></div>
        <div class="content">
            <table>
                <tr>
                    <td style="width: 40%">No Peserta</td>
                    <td>:</td>
                    <td><b>{{ $peserta->peserta->no_peserta }}</b></td>
                </tr>
                <tr>
                    <td>NAMA</td>
                    <td>:</td>
                    <td><b>{{ $peserta->nama }}</b></td>
                </tr>
                <tr>
                    <td>Tempat, Tgl Lahir</td>
                    <td>:</td>
                    <td>{{ $peserta->ttl }}</td>
                </tr>
                <tr>
                    <td>Asal Sekolah</td>
                    <td>:</td>
                    <td>{{ $peserta->sekolah }}</td>
                </tr>
                <tr>
                    <td>Paket Keahlian</td>
                    <td>:</td>
                    <td>
                        <ol style="margin: 0; padding-left: 25px">
                            <li>{{ $peserta->jurusan(1) }}</li>
                            <li>{{ $peserta->jurusan(2) }}</li>
                        </ol>
                    </td>
                </tr>
            </table>
        </div>
        <div class="footer">
            <div class="ttd">
                <p>Tasikmalaya, 02/12/2021</p>
                <p>PANITIA PPDB SMK YPC</p>
            </div>
        </div>
        <div class="divider"></div>
        <div class="note">
            <h3><i>Catatan:</i></h3>
            <ul>
                <li>Pengumuman hasil penerimaan tanggal {{ Carbon\Carbon::make($peserta->gelombang->pengumuman)->translatedFormat('d M Y') }}</li>
                <li>Bukti ini Harap dibawa pada saat daftar ulang </li>
                <li>Daftar ulang sesuai jadwal yang sudah di tentukan, apabila tidak sesuai dengan jadwal dianggap mengundurkan diri.</li>
            </ul>
        </div>
    </div>
    <hr style="border: 1px dotted black; margin-left: -5px; margin-right: -5px; margin-top: 10px">
</body>
</html>
