@php
    $web_setting = setting('web_setting');
@endphp
@extends('layouts.master')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/wtf-forms.css') }}">
@endpush

@section('content')
<section id="content">
    <div class="container">
        <div class="row">
            <div class="span8">
            <h5>Testimoni Alumni</h5>
                @if ($errors->any())
                    <ul class="alert alert-warning" style="margin-left: 0; padding-left: 35px; border-radius: 7px">
                        @foreach ($errors->all() as $err)
                        <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                @endif
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form action="/testimoni" method="post" role="form" class="contactForm" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                    <div class="span4 form-group field">
                        {{-- <input type="file" name="avatar" id="avatar" placeholder="Nama Lengkap sesuai Ijazah terakhir" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validation"></div> --}}
                        <label class="file">
                            <input type="file" id="avatar" name="avatar" aria-label="File browser example" accept="image/*">
                            <span class="file-custom">Silahkan pilih avatar...</span>
                        </label>
                    </div>
                    <div class="span4 form-group field">
                        <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Nama Lengkap sesuai Ijazah terakhir" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validation"></div>
                    </div>

                    <div class="span4 form-group">
                        <input type="text" name="company_name" value="{{ old('company_name') }}" id="company_name" placeholder="Nama Perusahaan" data-rule="" data-msg="Please enter a valid company_name" />
                        <div class="validation"></div>
                    </div>
                    <div class="span4 form-group">
                        <input type="text" name="jabatan" id="jabatan" value="{{ old('jabatan') }}" placeholder="Jabatan" data-rule="jabatan" data-msg="Please enter a valid email" />
                        <div class="validation"></div>
                    </div>
                    <div class="span8 form-group">
                        <textarea name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message">{{ old('message') }}</textarea>
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
                            <li><label>Alamat :</label> {{ $web_setting['alamat'] }}</li>
                            <li><label>Phone :</label> {{ $web_setting['no_telp'] }}</li>
                            <li><label>Instagram : </label>@officialsmkypc</li>
                            <li><label>Email : </label> {{ $web_setting['email'] }}</li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
  </section>
@endsection

@push('js')
    <script>
        $('#avatar').on('change', function(){
            let name = $(this)[0].files[0].name
            $('.file-custom').text(name)
        })
    </script>
@endpush
