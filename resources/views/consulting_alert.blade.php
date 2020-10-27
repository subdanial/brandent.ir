@extends('layouts.main')
@section('title')
Brandent - Consulting
@endsection
@section('body-class')
bg-black-mini
@endsection
@section('content')
<main data-barba="container" data-barba-namespace="consulting" class="consulting">
    @include('layouts.flash')
    @include('layouts.menu-full')
    <div class="top-nav py-3 px-3 px-lg-5">
        <div class="d-flex justify-content-between">
            <div class="menu d-none d-md-block">
                @include('layouts.menu')
            </div>
            <div class="menu pointer js-btn-menu mt-2 d-md-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="21" viewBox="0 0 30 21">
                    <g transform="translate(-3 -7.5)">
                        <path d="M4.5,18h27" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="3" />
                        <path d="M4.5,9h27" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="3" />
                        <path d="M4.5,27H18" transform="translate(13.5)" fill="none" stroke="#fff"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
                    </g>
                </svg>
            </div>
            <div class="logo">
                <a href="{{route('home')}}"><img src="{{asset('img/logo-orange.png')}}"></a>
            </div>
        </div>
    </div>

    <div class="d-flex desktop-center">
        <h1 class="text-orange font-weight-bolder text-center w-100">
            درخواست شما با موفقیت ثبت شد، به زودی با شما تماس میگیریم
            <a href="{{route('home')}}" class="d-block mx-auto w-100 text-white text-center mt-3" style="font-size: 1.2rem!important">  بازگشت به سایت  <svg width="1em" height="1em"
                viewBox="0 0 16 16" class="bi bi-arrow-left-circle-fill" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5.5a.5.5 0 0 0 0-1H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5z" />
            </svg></a>
        </h1>


    </div>

</main>
@endsection