@php
    $register_count = App\Models\Register::where('is_read', 0)->count();
@endphp
<style>
    .register_count{
        padding-right: 5px;
        padding-left: 5px;
        background: #e60000;
        font-weight: bold;
        display: block;
        text-align: center;
        border-radius: 3px;
    }
</style>
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            @canany(['admin','staff'])
            <li class="{{ request()->is('admin/index')?'active':'' }}"><a href="{{ url('admin/index') }}"><i class="fa fa-home"></i> Home</a> </li>
            <li>
                <a><i class="fa fa-user"></i> Data Peserta/Siswa <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li class="{{ request()->routeIs('register.*')?'active':'' }}">
                        <a href="/admin/register" class="d-flex justify-content-between">
                            <span>Register</span>
                            @if ($register_count>0)
                                <span class="register_count">{{ $register_count }}</span>
                            @endif
                        </a>
                    </li>
                    <li class="{{ request()->is('admin/calon_siswa')?'active':'' }}"><a href="/admin/calon_siswa">Calon Siswa</a></li>
                    <li class="{{ request()->is('admin/siswa')?'active':'' }}"><a href="/admin/siswa">Siswa</a></li>
                </ul>
            </li>
            <li class="{{ request()->is('admin/pembayaran')?'active':'' }}"><a href="/admin/pembayaran"><i class="fa fa-money"></i> Pembayaran</a></li>
            <li class="{{ request()->is('admin/nilai-raport*')?'active':'' }}"><a href="nilai-raport"><i class="fa fa-file-text-o"></i> Nilai Raport</a></li>
            @endcanany
            @can('peserta')
                <li><a href="/user/index">Dashboard</a></li>
<<<<<<< HEAD
                <li><a href="/user/konfirmasi_pembayaran">Konfirmasi Pembayaran</a></li>
                <li><a href="/user/data-rapot">Data Raport</a></li>
                <li><a href="/user/index">Data Prestasi</a></li>

=======
                <li><a href="/user/pembayaran">Konfirmasi Pembayaran</a></li>
                <li><a href="/user/nilai-rapot">Nilai Rapot</a></li>
                <li><a href="/user/data-prestasi">Data Prestasi</a></li>
>>>>>>> deb5266564b6bc9ebf0a186394618064773e04cb
            @endcan
        </ul>
    </div>
    @can('admin')
    <div class="menu_section">
        <h3>Frontend</h3>
        <ul class="nav side-menu">
            <li>
                <a><i class="fa fa-gear"></i> Settings <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="/admin/user">User</a></li>
                    <li><a href="/admin/tahun_ajaran">Tahun Ajaran</a></li>
                    <li><a href="/admin/jurusan">Jurusan</a></li>
                    <li><a href="/admin/gelombang">Gelombang</a></li>
                    <li><a href="/admin/mitra-kerja">Mitra Perusahaan</a></li>
                    <li><a href="/admin/prosedur">Prosedur</a></li>
                    <li><a href="/admin/testimoni">Testimoni</a></li>
                    <li><a href="/admin/slide">Slide</a></li>
                    <li><a href="/admin/gallery">Gallery</a></li>
                    <li><a href="/admin/web_setting">Web Setting</a></li>
                </ul>
            </li>
        </ul>
    </div>
    @endcan
</div>
