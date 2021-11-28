<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <li class="{{ request()->is('admin/index')?'active':'' }}"><a href="{{ url('admin/index') }}"><i class="fa fa-home"></i> Home</a> </li>
            <li>
                <a><i class="fa fa-user"></i> Data Peserta/Siswa <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li class="{{ request()->routeIs('register.*')?'active':'' }}"><a href="/admin/register">Register</a></li>
                    <li class="{{ request()->is('admin/calon_siswa')?'active':'' }}"><a href="/admin/calon_siswa">Calon Siswa</a></li>
                    <li class="{{ request()->is('admin/siswa')?'active':'' }}"><a href="/admin/siswa">Siswa</a></li>
                </ul>
            </li>
            <li class="{{ request()->is('admin/pembayaran')?'active':'' }}"><a href="/admin/pembayaran"><i class="fa fa-money"></i> Pembayaran</a></li>
            <li><a href="javascript:void(0)"><i class="fa fa-file-text-o"></i> Nilai Raport</a></li>
        </ul>
    </div>
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
                    <li><a href="/admin/kerjasama">Kerjasama</a></li>
                    <li><a href="/admin/prosedur">Prosedur</a></li>
                    <li><a href="/admin/slide">Slide</a></li>
                    <li><a href="/admin/gallery">Gallery</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
