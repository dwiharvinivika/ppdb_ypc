@extends('layouts.admin.master_admin')

@section('content')
@csrf
@foreach (setting('slides') as $i => $slide)
<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
          <h2>Slide Ke-{{ $loop->iteration }}</small></h2>
          <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a> </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <label for="">Background</label>
                    <input type="file" class="form-control" name="bg" data-slide="{{ $i }}">
                    <img id="bg-{{ $i }}" src="{{ asset($slide['bg']) }}" alt="" class="img-thumbnail">
                </div>
                <div class="col-sm-12 col-md-6">
                    <label for="">Content</label>
                    <input type="file" class="form-control" name="content" data-slide="{{ $i }}">
                    <img id="content-{{ $i }}" src="{{ asset($slide['content']) }}" alt="" class="img-thumbnail">
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection

@push('js')
    <script>
        $('input[type=file]').on('change', function(){
            let slide = $(this).data('slide');
            let name = $(this)[0].name;
            var file_data = $(this).prop("files")[0];
            var form_data = new FormData();

            const [file] = $(this)[0].files;
            if(file){
                $('#'+name+'-'+slide).attr('src', URL.createObjectURL(file))
            }

            form_data.append("slide", slide);
            form_data.append(name, file_data);
            $.ajax({
                url: '/api/change-slide',
                method: 'post',
                processData: false,
                contentType: false,
                data: form_data,
                success: function(msg){
                    Toast.fire({
                        icon: 'success',
                        title: msg
                    })
                }
            })
        })
    </script>
@endpush
