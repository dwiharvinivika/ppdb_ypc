@if ($errors->any())
    <div class="x_panel">
        <div class="x_content text-danger">
            <ul>
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
