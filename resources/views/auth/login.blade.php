@extends('layouts.main-admin')
@section('title')
Brandent
@endsection
@section('body-class')
bg-black-mini
@endsection
@section('content')
<form method="POST" action="{{ route('login') }}">

    @csrf

    <div class="container vh-100">
        <div class="row h-100 w-100 justify-content-center align-items-center">
            <div class="login-form w-100 ">
                <input id="email" type="email" placeholder="ایمیل" class="text-right mb-2 w-25 mx-auto form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <input id="password" type="password" placeholder="رمز عبور" class="text-right mb-2 w-25 mx-auto form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <button type="submit" class="btn btn-dark mt-2 mx-auto w-25 text-center d-block">
                    ورود
                </button>
            </div>
        
        
        </div>
    </div>
    

</form>
@endsection