@extends('layouts.main')
@section('title')
Brandent
@endsection
@section('body-class')
bg-blue
@endsection
@section('content')
<div data-barba="container"></div>
<main class="signup h-100 ">
    

    <section class="intro h-100">
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
        <div class="container-fluid bg-white h-100  p-0">
            <div class="row flex-row-reverse no-gutters">
                <div class="js-background background d-none d-xl-block">
                    <img src="{{asset('img\signbanner.jpg')}}" alt="">
                </div>
                <div class="col-12 d-xl-none">
                    <div class="background">
                        <img src="{{asset('img\signbanner.jpg')}}" alt="">
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
                        <a  class="js-btn-to-plan btn btn-blue mx-auto d-block mt-2 w-25">ثبت نام</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="plan h-100" style="display: none">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="card-plan pb-4 my-4 my-lg-0 card card-body border-0">
                    <div class="d-flex pt-2 justify-content-between">
                        <h4 class="text-blue text-right font-weight-bolder ">پلن مورد نظر خود را انتخاب کنید</h4>
                        <h6  data-plan="4" data-value="400" class="js-btn-to-info text-blue text-left font-weight-bold pt-2 pointer">دندان پزشک نیستید؟</h6>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card shadow hover-scale mt-3">
                                <div class="card-body">
                                    <div class="d-flex card-title justify-content-between">
                                        <div class="name text-blue font-weight-bolder">دندان پزشکان</div>
                                        <div class="price text-blue font-weight-bold">250 هزار تومان</div>
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
                                    <button data-plan="1" data-value="250" class="js-btn-to-info btn btn-blue-light mx-auto d-block">انتخاب پلن</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card shadow hover-scale mt-3">
                                <div class="card-body">
                                    <div class="d-flex card-title justify-content-between">
                                        <div>
                                            <div class="name text-blue font-weight-bolder">دندان پزشکان</div>
                                            <small class="name w-100 d-block text-blue text-right position-absolute mt-n1 font-weight-bold">پیش ثبت نام</small>
    
                                        </div>
                                        <div class="price text-blue font-weight-bold">180 هزار تومان</div>
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
                                    <button data-plan="2" data-value="180" class="js-btn-to-info btn btn-blue mx-auto d-block">انتخاب پلن</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card shadow hover-scale mt-3">
                                <div class="card-body">
                                    <div class="d-flex card-title justify-content-between">
                                        <div class="name text-blue font-weight-bolder">ویژه دانشجویان</div>
                                        <div class="price text-blue font-weight-bold">130 هزار تومان</div>
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
                                    <button data-plan="3" data-value="130" class="js-btn-to-info btn btn-blue-light mx-auto d-block">انتخاب پلن</button>
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
       
        </div>
        <div class="back">
            <a href="#" class="js-btn-back-to-intro ">
                <svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
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
    <section class="info h-100" style="display: none;">
        <div class="container bg-blue h-100">
          <div class="row row-cards bg-blue vh-100 d-flex justify-content-center align-items-center">
            <div class="col  bg-blue">
              <div class="card align-items-center w-100 rounded-0 p-5 ">
                <form action="{{route('payment')}}" method="POST" class="w-100 text-right">
                  @csrf
                  <input class="plan_amount" type="hidden" name="plan_amount">
                  <div class="row">
                    <div class="col-md-6">
                      <h4 class="font-weight-bold text-center d-none d-md-block text-md-right">ثبت نام </h4>
                      <h4 class="font-weight-bolder  d-block d-md-none text-center text-md-right">ثبت نام </h4>
                    </div>
                    <div class="col-md-6">
                      <h4 class="text-blue text-center text-md-right font-weight-bold">پلن انتخابی شما : <span
                          class="js-plan-name"></span></h4>
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
                    <input type="text" name="name" class="form-control js-input-signup js-name" placeholder="نام" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label>نام خانوادگی</label>
                      <input type="text" name="lastname" class="form-control js-input-signup js-lastname" placeholder="نام خانوادگی" required>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-12">
                      <label>ایمیل</label>
                      <input type="email" name="email" class="form-control js-input-signup js-email" placeholder="ایمیل" required>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label>رمز عبور</label> <small class="help"> (حد اقل 8 کاراکتر)</small>
                      <input type="password" name="password" class="form-control js-input-signup js-password" minlength="8" placeholder="رمز عبور">
                     
                    </div>
                    <div class="form-group col-md-6">
                      <label>تکرار رمز عبور</label>
                      <input type="password" name="password_confirmation" class="form-control js-input-signup js-password_confirmation" minlength="8" placeholder="تکرار رمز عبور">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label>شماره تماس</label>
                      <input type="number" name="phone" class="form-control js-input-signup js-phone" placeholder="09123456789">
                    </div>
                    <div class="form-group col-md-6">
                      <label><span class="js-user-group"></span></label>
                      <input type="text" name="code" class="form-control js-input-signup js-code" placeholder="کد">
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
                <svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
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