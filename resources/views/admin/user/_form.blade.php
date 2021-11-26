@csrf
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align"
        for="name">Nama Admin
    </label>
    <div class="col-md-6 col-sm-6 ">
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $user->name??'') }}">
        @error('name')
            <div class="invalid-feedback"> {{ $message }}</div>
        @enderror
    </div>
</div>
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align"
        for="email">Email Admin
    </label>
    <div class="col-md-6 col-sm-6 ">
        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $user->email??'') }}">
        @error('email')
            <div class="invalid-feedback"> {{ $message }}</div>
        @enderror
    </div>
</div>
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align"
        for="password">Password Admin
    </label>
    <div class="col-md-6 col-sm-6 ">
        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
        @error('password')
            <div class="invalid-feedback"> {{ $message }}</div>
        @enderror
        @if (request()->routeIs('user.edit'))
            <div class="text-helper">* Kosongkan jika tidak ingin mengubah password</div>
        @endif
    </div>
</div>
<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align"
        for="password_confirmation">Konfirmasi Password
    </label>
    <div class="col-md-6 col-sm-6 ">
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror">
        @error('password_confirmation')
            <div class="invalid-feedback"> {{ $message }}</div>
        @enderror
    </div>
</div>
