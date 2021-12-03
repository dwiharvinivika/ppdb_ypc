<div class="row nomargin">
  <div class="span4">
    <div class="logo">
      <a href="/home"><img src="{{ $web_setting['logo'] }}" alt="" /></a>
    </div>
  </div>
  <div class="span8">
    <div class="navbar navbar-static-top">
      <div class="navigation">
        <nav>
          <ul class="nav topnav">
            <li class="{{ request()->is('/')?'active':'' }}">
              <a href="/"><i class="icon-home"></i> Home </i></a>
            </li>
            <li class="{{ request()->is('prosedur')?'active':'' }}">
              <a href="/prosedur">Prosedur </a>
            </li>
            <li class="{{ request()->is('jadwal')?'active':'' }}">
              <a href="/jadwal">Jadwal </a>
            </li>
            <li class="dropdown {{ request()->is(['jurusan','kerjasama','cek_hasil','hasil','contact'])?'active':'' }}">
              <a href="#">Informasi <i class="icon-angle-down"></i></a>
              <ul class="dropdown-menu">
                <li class="{{ request()->is('jurusan')?'active':'' }}"><a href="/jurusan">Jurusan</a></li>
                <li class="{{ request()->is('kerjasama')?'active':'' }}"><a href="/kerjasama">Kerjasama Perusahaan</a></li>
                <li class="{{ request()->is(['cek_hasil','hasil'])?'active':'' }}"><a href="/cek_hasil">Hasil Seleksi</a></li>
                <li class="{{ request()->is('contact')?'active':'' }}"><a href="/contact">Contact</a></li>
              </ul>
            </li>
            <li class="dropdown {{ request()->is(['kegiatan', 'fasilitas'])?'active':'' }}">
              <a href="#">Gallery <i class="icon-angle-down"></i></a>
              <ul class="dropdown-menu">
                <li class="{{ request()->is('kegiatan')?'active':'' }}"><a href="/kegiatan">Kegiatan</a></li>
                <li class="{{ request()->is('fasilitas')?'active':'' }}"><a href="/fasilitas">Fasilitas</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#">Login <i class="icon-angle-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="/login_siswa">Siswa Baru</a></li>
                <li><a href="/login_admin">Admin</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
      <!-- end navigation -->
    </div>
  </div>
</div>
