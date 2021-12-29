<button class="btn btn-success" onclick="showAlert('nerima', {{ $testimoni->id }})"><i class="fa fa-check"></i></button>
<button class="btn btn-warning text-danger" onclick="showAlert('nolak', {{ $testimoni->id }})"><i class="fa fa-times"></i></button>
<a href="{{ route('testimoni.show', $testimoni) }}" class="btn btn-info"><i class="fa fa-info"></i></a>
<button class="btn btn-danger hapus" data-id="{{ $testimoni->id }}"><i class="fa fa-trash"></i> Hapus</button>
