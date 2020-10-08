@extends('layouts.main')
@section('title')
Brandent
@endsection
@section('body-class')
bg-black-mini
@endsection
@section('content')
<main data-barba="container" data-barba-namespace="post" class="post">
    @include('layouts.flash')
    @include('layouts.menu-full')
    <main class="blog">
        <div class="top-nav  py-3 px-3 px-lg-5">
            <div class="d-flex justify-content-between">
                <div class="menu d-none d-md-block">
                    @include('layouts.menu')
                </div>
                <div class="menu pointer mt-2 js-btn-menu d-md-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="21" viewBox="0 0 30 21">
                        <g transform="translate(-3 -7.5)">
                            <path d="M4.5,18h27" fill="none" stroke="#fff" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="3" />
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
        <div class="container">
            <div class="posts mt-md-n5 p-lg-5 rounded-0 mx-auto ">
                <div class="post shadow mb-4 p-4 w-100">
                    <div class="row justify-content-between">
                        <div class="title text-orange fs-7 pr-3 mr-n1  pt-3 font-weight-bolder text-right">این پست اول
                            ماست</div>
                        <div class="row no-gutters pl-3">
                            <div><img src="{{asset('img/minilogo.png')}}" class="w-100"></div>
                            <div class="pt-2 pr-2">
                                <div class="writer text-right text-orange">نوشته شده توسط برندنت</div>
                                <div class="writer text-right text-orange">
                                    {{verta($post->created_at)->formatDifference()}} / {{$post->category->name}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="picture pointer py-4">
                        <img src="/upload/img/{{$post->image}}" alt="">
                    </div>
                    <div class="content text-white text-right">
                        {!!$post->content!!}
                    </div>
                    <a href="{{url()->previous()}}" class="btn-post d-block text-center my-3  w-7-em btn btn-orange"> بازگشت
                    </a>

                </div>

            </div>
        </div>
    </main>
    @endsection