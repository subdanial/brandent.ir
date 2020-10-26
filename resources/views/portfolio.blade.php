@extends('layouts.main')
@section('title')
Brandent - Portfolio
@endsection
@section('body-class')
bg-black-mini
@endsection
@section('content')
<main data-barba="container" data-barba-namespace="portfolio" class="portfolio">
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
    <div class="works">
        <div class="slogan text-orange  d-md-block d-none text-center fs-10  font-weight-bolder w-100 ">
            برخی از پروژه های انجام شده برندنت
        </div>
        <div class="slogan text-orange  d-md-none text-center fs-8  font-weight-bolder w-100 ">
            برخی از پروژه های<br> انجام شده برندنت
        </div>
        <div class="row row-works no-gutters pb-5 mt-md-n4">
            @foreach ($works as $work)
                
            <div class="col-lg-3 p-2 col-md-4 col-6">
                <a data-barba-prevent="self"  href="upload/img/{{$work->image}}" data-fancybox="gallery"
                    data-caption="{{$work->describe}}">
                    <img class="hover-scale pointer" src="upload/img/thumb/{{$work->image}}">
                </a>
            </div>

            @endforeach

        </div>
    </div>
</main>
@endsection