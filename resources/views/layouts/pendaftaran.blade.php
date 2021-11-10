@extends('layouts.master')
@section('content')
    
  
      <section id="content">
        <div class="container">
          <div class="row">
            <div class="span8">
              <h5>Form Pendafataran Peserta Didik Baru</h5>
  
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="row">
                  <div class="span4 form-group field">
                    <input type="text" name="name" id="name" placeholder="Nama Lengkap sesuai Ijazah terakhir" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
  
                  <div class="span4 form-group">
                    <input type="email" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                  <div class="span8 form-group">
                    <input type="text" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                  </div>
                  <div class="span8 form-group">
                    <textarea name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                    <div class="text-center">
                      <button class="btn btn-theme btn-medium margintop10" type="submit">Simpan Pendaftaran</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="span4">
              <div class="clearfix"></div>
              <aside class="right-sidebar">
  
                <div class="widget">
                  <h5 class="widgetheading">Contact information<span></span></h5>
  
                  <ul class="contact-info">
                    <li><label>Alamat :</label> Komplek Pesantren Cintawana<br />Jl. Singaparna - Garut</li>
                    <li><label>Phone :</label>+62 123 456 78 / +62 123 456 79</li>
                    <li><label>Instagram : </label>@officialsmkypc</li>
                    <li><label>Email : </label> smk_ypc@gmail.com</li>
                  </ul>
  
                </div>
              </aside>
            </div>
          </div>
        </div>
      </section>
@endsection