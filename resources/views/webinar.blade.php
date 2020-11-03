@extends('layouts.main')
@section('title')
Brandent
@endsection
@section('body-class')
bg-blue
@endsection
@section('content')
<div data-barba="container"></div>
<main class="signup ">





    <!-- Modal -->
    <div class="modal fade" id="offer_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title text-right d-block w-100">پیغام موفقیت</h5>
                </div>
                <div class="modal-body">
                    <div class="d-block w-100 mx-auto">
                        <svg class="d-block mx-auto p-4" style="fill:#212529;" id="Layer_1" height="176" viewBox="0 0 512 512" width="176"
                            xmlns="http://www.w3.org/2000/svg" data-name="Layer 1">
                            <path
                                d="m234.847 121.362a18.553 18.553 0 1 0 -18.553-18.552 18.573 18.573 0 0 0 18.553 18.552zm0-25.1a6.553 6.553 0 1 1 -6.553 6.553 6.559 6.559 0 0 1 6.553-6.558z" />
                            <path
                                d="m258.6 145.115a18.553 18.553 0 1 0 18.552-18.552 18.573 18.573 0 0 0 -18.552 18.552zm25.105 0a6.553 6.553 0 1 1 -6.553-6.552 6.56 6.56 0 0 1 6.554 6.552z" />
                            <path
                                d="m224.362 155.6a6 6 0 0 0 8.486 0l54.789-54.788a6 6 0 1 0 -8.485-8.485l-54.789 54.788a6 6 0 0 0 -.001 8.485z" />
                            <path
                                d="m256 201.553a77.591 77.591 0 1 0 -77.591-77.591 77.679 77.679 0 0 0 77.591 77.591zm0-143.181a65.591 65.591 0 1 1 -65.591 65.59 65.664 65.664 0 0 1 65.591-65.59z" />
                            <path d="m394.919 124a6 6 0 0 0 6 6h28.571a6 6 0 0 0 0-12h-28.571a6 6 0 0 0 -6 6z" />
                            <path d="m415.19 63.51-28.571 21.4a6 6 0 0 0 7.195 9.6l28.572-21.4a6 6 0 0 0 -7.2-9.6z" />
                            <path
                                d="m386.619 163.011 28.571 21.4a6 6 0 0 0 7.2-9.6l-28.572-21.4a6 6 0 0 0 -7.195 9.6z" />
                            <path d="m76.51 124a6 6 0 0 0 6 6h28.571a6 6 0 1 0 0-12h-28.571a6 6 0 0 0 -6 6z" />
                            <path
                                d="m118.186 153.407-28.572 21.4a6 6 0 0 0 7.2 9.6l28.571-21.4a6 6 0 0 0 -7.195-9.6z" />
                            <path
                                d="m125.381 84.914-28.571-21.404a6 6 0 0 0 -7.2 9.6l28.572 21.4a6 6 0 0 0 7.195-9.6z" />
                            <path
                                d="m416.529 222.414a4.827 4.827 0 0 0 -3.529-2.883l-73.587-25.219 5.259-2.658a26 26 0 0 0 14.238-24.635l-.611-11.109a14.089 14.089 0 0 1 2.29-8.476l6.038-9.157a25.975 25.975 0 0 0 0-28.624l-6.037-9.156a14.089 14.089 0 0 1 -2.29-8.476l.611-11.109a26 26 0 0 0 -14.237-24.636l-9.833-4.967a13.91 13.91 0 0 1 -6.184-6.183l-4.968-9.833a26 26 0 0 0 -24.635-14.237l-11.11.611a14.091 14.091 0 0 1 -8.475-2.291l-9.156-6.037a25.973 25.973 0 0 0 -28.624 0l-9.156 6.037a14.129 14.129 0 0 1 -8.475 2.291l-11.11-.611a25.986 25.986 0 0 0 -24.636 14.234l-4.968 9.833a13.907 13.907 0 0 1 -6.185 6.183l-9.831 4.967a26 26 0 0 0 -14.238 24.636l.611 11.109a14.089 14.089 0 0 1 -2.29 8.476l-6.038 9.157a25.973 25.973 0 0 0 0 28.623l6.037 9.157a14.089 14.089 0 0 1 2.29 8.476l-.611 11.109a26 26 0 0 0 14.237 24.635l5.683 2.871-74.009 24.998a4.84 4.84 0 0 0 -3.542 2.891l-31.658 60.099a6.041 6.041 0 0 0 2.6 8.09l31.6 16.743v115.977a5.867 5.867 0 0 0 3.24 5.4l152.223 73.637a5.835 5.835 0 0 0 2.574.6 5.912 5.912 0 0 0 2.593-.6l152.14-73.637a5.858 5.858 0 0 0 3.23-5.4v-115.977l31.637-16.743a6 6 0 0 0 2.487-8.089zm-243.791-41.474a14 14 0 0 1 -7.666-13.265l.612-11.11a26.176 26.176 0 0 0 -4.255-15.74l-6.036-9.156a13.985 13.985 0 0 1 0-15.413l6.037-9.156a26.177 26.177 0 0 0 4.255-15.741l-.612-11.109a14 14 0 0 1 7.667-13.266l9.831-4.967a25.83 25.83 0 0 0 11.485-11.483l4.967-9.834a14.007 14.007 0 0 1 13.265-7.666l11.109.612a26.141 26.141 0 0 0 15.742-4.254l9.156-6.038a13.986 13.986 0 0 1 15.412 0l9.156 6.038a26.152 26.152 0 0 0 15.737 4.254l11.109-.612a14.008 14.008 0 0 1 13.269 7.666l4.967 9.832a25.83 25.83 0 0 0 11.484 11.484l9.833 4.967a14 14 0 0 1 7.666 13.266l-.612 11.109a26.177 26.177 0 0 0 4.255 15.741l6.036 9.155a13.987 13.987 0 0 1 0 15.414l-6.037 9.156a26.177 26.177 0 0 0 -4.255 15.741l.612 11.109a14 14 0 0 1 -7.667 13.265l-9.831 4.968a25.825 25.825 0 0 0 -11.485 11.483l-4.967 9.834a14.035 14.035 0 0 1 -13.265 7.666l-11.109-.612a26.178 26.178 0 0 0 -15.742 4.254l-9.156 6.037a13.982 13.982 0 0 1 -15.412 0l-9.156-6.037a26.207 26.207 0 0 0 -14.341-4.292c-.466 0-.934.012-1.4.038l-11.109.612a13.992 13.992 0 0 1 -13.265-7.667l-4.967-9.833a25.828 25.828 0 0 0 -11.484-11.483zm77.262 306.452-140-67.835v-105.833l110.972 59.089a5.71 5.71 0 0 0 2.743.7 5.784 5.784 0 0 0 1.789-.285 5.959 5.959 0 0 0 3.521-3.032l20.975-41.984zm5.979-191.3-88.342-44.116c-2.7-1.347-5.973-.974-7.656 2.026a6 6 0 0 0 2.3 8.71l85.663 42.775-26.923 53.846-143.9-76.523 26.079-49.61 23 11.487a6 6 0 0 0 5.361-10.736l-15.355-7.668 67.5-22.76 4.605 9.113a25.978 25.978 0 0 0 24.635 14.237l11.11-.611a14.12 14.12 0 0 1 8.475 2.291l9.156 6.037a25.973 25.973 0 0 0 28.624 0l9.156-6.037a14.1 14.1 0 0 1 8.475-2.291l11.11.611a25.982 25.982 0 0 0 24.635-14.237l4.764-9.428 67.38 23.036zm146.021 123.465-140 67.835v-159.18l20.993 41.988a6 6 0 0 0 5.366 3.317 5.431 5.431 0 0 0 2.669-.7l110.972-59.093zm-111.025-60.227-26.924-53.848 144.749-72.282 26.077 49.609z" />
                            <path d="m125 336.017a6 6 0 0 0 -6 6v5.372a6 6 0 0 0 12 0v-5.372a6 6 0 0 0 -6-6z" />
                            <path d="m125 360.636a6 6 0 0 0 -6 6v40.548a6 6 0 0 0 12 0v-40.548a6 6 0 0 0 -6-6z" /></svg>
                    </div>

                    <h1 class="font-weight-bolder text-center">
                        تخفیف 25 درصدی اعمال شد!
                    </h1>
                </div>

            </div>
        </div>
    </div>



    <section class="intro">
        <div class="back">
            <a href="{{route('home')}}" data-barba-prevent="self">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M313.749,347.584
                        c8.341,8.341,8.341,21.824,0,30.165c-4.16,4.16-9.621,6.251-15.083,6.251c-5.461,0-10.923-2.091-15.083-6.251L176.917,271.083
                        c-8.341-8.341-8.341-21.824,0-30.165l106.667-106.667c8.341-8.341,21.824-8.341,30.165,0s8.341,21.824,0,30.165L222.165,256
                        L313.749,347.584z" />
                        </g>
                </svg>
            </a>
        </div>
        <div class="container-fluid bg-white  p-0">
            <div class="row flex-row-reverse no-gutters">
                <div class="js-background background d-none d-xl-block">
                    <img src="{{asset('img\signbanner2.jpg')}}" alt="">
                </div>
                <div class="col-12 d-xl-none">
                    <div class="background">
                        <img src="{{asset('img\signbanner2.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-signup bg-white js-signup-col">
                    <div class="js-content content">
                        <div class="title text-center">
                            به اولین سمپوزیم
                            <br>
                            آنلاین اصول مطب داری و برندسازی
                        </div>
                        <div class="subtitle text-center">
                            مطلوب و چالش های آن در اپیدمی کرونا
                            <br>
                            خوش آمدید
                        </div>
                        <a class="js-btn-to-plan btn btn-blue mx-auto d-block mt-2 w-25">ثبت نام</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="plan" style="display: none">
        <div class="container">
            <div class="row  align-items-center row-plans">
                <div class="card-plan pb-4 my-4 my-lg-0 card card-body border-0">
                    <div class="d-flex pt-2 justify-content-between">
                        <h4 class="text-blue text-right font-weight-bolder ">پلن مورد نظر خود را انتخاب کنید</h4>
                        <h6 data-plan="4" data-value="400"
                            class="js-btn-to-info text-blue text-left font-weight-bold pt-2 pointer">دندان پزشک نیستید؟
                        </h6>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card shadow hover-scale mt-3">
                                <div class="card-body">
                                    <div class="d-flex card-title justify-content-between">
                                        <div>
                                            <div class="name text-blue font-weight-bolder">دندان پزشکان</div>
                                            <small
                                                class="name w-100 d-block text-blue text-right position-absolute mt-n1 font-weight-bold">ثبت
                                                نام با امتیاز</small>
                                        </div>
                                        <div class="price text-blue font-weight-bold"> <span class="label_price"
                                                data-plan="1">250</span> هزار تومان</div>
                                    </div>
                                    <hr>
                                    <span class="text-right d-block w-100">شرکت در کنگره و استفاده از پنل ها</span>
                                    <hr>
                                    <span class="text-right d-block w-100">امکان پرسش در پنل های پرسش و پاسخ</span>
                                    <hr>
                                    <span class="text-right d-block w-100">امکان مشاهده پنل ها به صورت آفلاین تا ۳۰
                                        روز</span>
                                    <hr>
                                    <span class="text-right d-block w-100">شرکت در کنگره و استفاده از پنل ها</span>
                                    <hr>
                                    <button data-plan="1" data-value="250"
                                        class="js-btn-to-info btn btn-blue-light mx-auto d-block">انتخاب پلن</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card shadow hover-scale mt-3">
                                <div class="card-body">
                                    <div class="d-flex card-title justify-content-between">
                                        <div>
                                            <div class="name text-blue font-weight-bolder">دندان پزشکان</div>
                                            <small
                                                class="name w-100 d-block text-blue text-right position-absolute mt-n1 font-weight-bold">ثبت
                                                نام بدون امتیاز</small>

                                        </div>
                                        <div class="price text-blue font-weight-bold"><span class="label_price"
                                                data-plan="2">180</span> هزار تومان</div>
                                    </div>
                                    <hr>
                                    <span class="text-right d-block w-100">شرکت در کنگره و استفاده از پنل ها</span>
                                    <hr>
                                    <span class="text-right d-block w-100">امکان پرسش در پنل های پرسش و پاسخ</span>
                                    <hr>
                                    <span class="text-right d-block w-100">امکان مشاهده پنل ها به صورت آفلاین تا ۳۰
                                        روز</span>
                                    <hr>
                                    <span class="text-right d-block w-100">شرکت در کنگره و استفاده از پنل ها</span>
                                    <hr>
                                    <button data-plan="2" data-value="180"
                                        class="js-btn-to-info btn btn-blue mx-auto d-block">انتخاب پلن</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card shadow hover-scale mt-3">
                                <div class="card-body">
                                    <div class="d-flex card-title justify-content-between">
                                        <div class="name text-blue font-weight-bolder">ویژه دانشجویان</div>
                                        <div class="price text-blue font-weight-bold"><span class="label_price"
                                                data-plan="3">130</span> هزار تومان</div>
                                    </div>
                                    <hr>
                                    <span class="text-right d-block w-100">شرکت در کنگره و استفاده از پنل ها</span>
                                    <hr>
                                    <span class="text-right d-block w-100">امکان پرسش در پنل های پرسش و پاسخ</span>
                                    <hr>
                                    <span class="text-right d-block w-100">امکان مشاهده پنل ها به صورت آفلاین تا ۳۰
                                        روز</span>
                                    <hr>
                                    <span class="text-right d-block w-100">شرکت در کنگره و استفاده از پنل ها</span>
                                    <hr>
                                    <button data-plan="3" data-value="130"
                                        class="js-btn-to-info btn btn-blue-light mx-auto d-block">انتخاب پلن</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4  mt-4">
                            <label class="font-weight-bold text-right d-block">کد تخفیف دارید ؟ </label>
                            <div class="d-flex">

                                <button class="js-btn-off btn btn-off btn-blue py-0 ml-1 "> ثبت </button>
                                <div class="form-group w-100">
                                    <input type="text" name="" id=""
                                        class="js-input-off form-control w-100 rtl text-right" placeholder="کد تخفیف">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="back">
            <a href="#" class="js-btn-back-to-intro ">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M313.749,347.584
                        c8.341,8.341,8.341,21.824,0,30.165c-4.16,4.16-9.621,6.251-15.083,6.251c-5.461,0-10.923-2.091-15.083-6.251L176.917,271.083
                        c-8.341-8.341-8.341-21.824,0-30.165l106.667-106.667c8.341-8.341,21.824-8.341,30.165,0s8.341,21.824,0,30.165L222.165,256
                        L313.749,347.584z" />
                        </g>
                </svg>
            </a>
        </div>
    </section>
    <section class="info" style="display: none;">
        <div class="container bg-blue">
            <div class="row row-cards bg-blue  d-flex justify-content-center align-items-center">
                <div class="col  bg-blue">
                    <div class="card align-items-center card-desktop w-100 rounded-0 p-5 ">
                        <form action="{{route('payment')}}" method="POST" class="w-100 text-right">
                            @csrf
                            <input class="plan_amount" type="hidden" name="plan_amount">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="font-weight-bold text-center d-none d-md-block text-md-right">ثبت نام
                                    </h4>
                                    <h4 class="font-weight-bolder  d-block d-md-none text-center text-md-right">ثبت نام
                                    </h4>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="text-blue text-center text-md-right font-weight-bold">پلن انتخابی شما :
                                        <span class="js-plan-name"></span></h4>
                                </div>
                            </div>
                            <hr>
                            <div class="alert alert-warning pb-0" role="alert">
                                <div class="alert-heading font-weight-bold">اطلاعات ورود</div>
                                <p class="pb-0">برای استفاده از امکانات پلن ایمیل و رمز عبور خود را به خاطر بسپارید</p>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>نام</label>
                                    <input type="text" name="name" class="form-control js-input-signup js-name"
                                        placeholder="نام" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>نام خانوادگی</label>
                                    <input type="text" name="lastname" class="form-control js-input-signup js-lastname"
                                        placeholder="نام خانوادگی" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label>ایمیل</label>
                                    <input type="email" name="email" class="form-control js-input-signup js-email"
                                        placeholder="ایمیل" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>رمز عبور</label> <small class="help"> (حد اقل 8 کاراکتر)</small>
                                    <input type="password" name="password"
                                        class="form-control js-input-signup js-password" minlength="8"
                                        placeholder="رمز عبور">

                                </div>
                                <div class="form-group col-md-6">
                                    <label>تکرار رمز عبور</label>
                                    <input type="password" name="password_confirmation"
                                        class="form-control js-input-signup js-password_confirmation" minlength="8"
                                        placeholder="تکرار رمز عبور">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>شماره تماس</label>
                                    <input type="number" name="phone" class="form-control js-input-signup js-phone"
                                        placeholder="09123456789">
                                </div>
                                <div class="form-group col-md-6">
                                    <label><span class="js-user-group"></span></label>
                                    <input type="text" name="code" class="form-control js-input-signup js-code"
                                        placeholder="کد">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-blue js-submit" disabled>
                                <span class="text-white">تکمیل ثبت نام و انتقال به درگاه</span>
                            </button><br>
                            <small class="help js-help-active mt-2 pr-2">برای فعال شدن پرداخت فرم را تکمیل کنید.</small>

                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="back">
            <a href="#" class="js-btn-back-to-plan">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M313.749,347.584
                        c8.341,8.341,8.341,21.824,0,30.165c-4.16,4.16-9.621,6.251-15.083,6.251c-5.461,0-10.923-2.091-15.083-6.251L176.917,271.083
                        c-8.341-8.341-8.341-21.824,0-30.165l106.667-106.667c8.341-8.341,21.824-8.341,30.165,0s8.341,21.824,0,30.165L222.165,256
                        L313.749,347.584z" />
                        </g>
                </svg>
            </a>
        </div>
    </section>

</main>
@endsection
