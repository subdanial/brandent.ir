@extends('layout.main')
@section('content')
<main id="error" class="bg-blue" dir="rtl">
    <div class="vh-100">
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="card card-body">
                <h1 class="text-center w-100">{{$error}}</h1>
                <a href="{{ URL::previous() }}" class="font-weight-bold w-100 text-center">بازگشت</a>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection