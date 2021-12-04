<footer>
  <div class="container">
    <div class="row">
      <div class="span4">
        <div class="widget">
          <h5 class="widgetheading">Halaman Browser</h5>
          <ul class="link-list">
            <li><a href="/">Home</a></li>
            <li><a href="/prosedur">Prosedur</a></li>
            <li><a href="/jadwal">Jadwal Daftar</a></li>
            <li><a href="/cek_hasil">Hasil Seleksi</a></li>
            <li><a href="/gallery/kegiatan">Kegiatan</a></li>
            <li><a href="/gallery/fasilitas">Fasilitas</a></li>
          </ul>

        </div>
      </div>
      <div class="span4">
        <div class="widget">
          <h5 class="widgetheading">Hubungi Kami</h5>
          <address>
            <strong>{{ $web_setting['website_name'] }}</strong><br>
            {{ $web_setting['alamat'] }}
          </address>
          <p><i class="icon-phone"></i> {{ $web_setting['no_telp'] }} </p>
          <p><i class="icon-envelope-alt pr-2"></i> {{ $web_setting['email'] }} </p>
        </div>
      </div>
      <div class="span4">
        <div class="widget">
          <h5 class="widgetheading">Testimoni Alumni</h5>
          <p>
            Keep updated for new releases and freebies. Enter your e-mail and subscribe to our newsletter.
          </p>
          <form class="subscribe">
            <div class="input-append">

              <a href="/testimoni/create" class="btn btn-theme" >Input Form</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div id="sub-footer">
    <div class="container">
      <div class="row">
        <div class="span6">
          <div class="copyright">
            <p><span>&copy; {{ $web_setting['website_name'] }}. All right reserved</span></p>
          </div>

        </div>

        <div class="span6">
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Eterna
            -->
            Designed by <a target="_blank" href="https://bootstrapmade.com/">BootstrapMade</a> and <a target="_blank" href="https://jangbe.github.io">Jangbe</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
