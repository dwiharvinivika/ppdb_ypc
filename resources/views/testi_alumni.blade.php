<div class="row">
  <div class="span12 aligncenter">
    <h3 class="title">Apa kata <strong>Alumni..?</strong> </h3>
    <div class="blankline30"></div>
    <ul class="bxslider">
      @foreach (App\Models\Testimoni::where('is_accepted', 1)->get() as $testimoni)
      <li>
        <blockquote>
            {{ $testimoni->message }}
        </blockquote>
        <div class="testimonial-autor">
          <img src="{{ asset('img/avatars/'.$testimoni->avatar) }}" alt="" />
          <h4>{{ $testimoni->name }}</h4>
          <a href="#">{{ $testimoni->company_name }}</a>
        </div>
      </li>
      @endforeach
    </ul>
  </div>
</div>
