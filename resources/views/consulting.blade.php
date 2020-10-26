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
        
        <section class="consulting-form position-relative">
        
    <h2 class="text-orange font-weight-bolder position-absolute">   فرم همکاری با برندنت</h2>
         

            <section class="step" data-order="1">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class=""> نام و نام خانوادگی * </label>
                            <input type="text" class="form-control" name="fullname">
                        </div>
                        <div class="form-group">
                            <label class=""> آیدی پیج اینستاگرامتون ( پیج کاری ) </label>
                            <input type="text" class="form-control" name="instagram">
                        </div>
                        <div class="form-group">
                            <label class="">ایمیل </label>
                            <input type="email" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class=""> شماره موبایل * </label>
                            <input type="text" class="form-control" name="fullname">
                        </div>
                        <div class="form-group">
                            <label class="">اگر وبسایت دارید </label>
                            <input type="text" class="form-control  ltr" name="fullname" placeholder="http://">
                        </div>
                    </div>
                </div>
            </section>
            <section class="step" data-order="2">
                <div class="row">
                    <div class="col-12">
                        <label class="text-orange d-block"> در چه حوزه ای فعالیت می کنید ؟ *</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label" value="دندان پزشک">دندان پزشک</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label" value="پزشک">پزشک</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label" value="سرمایه گذار / مدیر کلینیک">سرمایه گذار / مدیر
                                کلینیک</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label" value="سرمایه گذار / مدیر کلینیک">سرمایه گذار / مدیر
                                کلینیک</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label" value="استارت آپ">استارت آپ</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label" value="فعالیت خارج از حوزه علوم پزشکی">فعالیت خارج از حوزه
                                علوم پزشکی</label>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <label class="text-orange d-block"> به دنبال دریافت چه خدماتی هستید ؟ *</label>
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-check ">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label" value="مشاوره برندسازی شخصی / استارت آپ / ..">مشاوره
                                        برندسازی شخصی / استارت آپ / ..</label>
                                </div>
                                <div class="form-check ">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label"
                                        value="طراحی هویت بصری برند ( لوگو ، سربرگ و .. )">طراحی هویت بصری برند ( لوگو ،
                                        سربرگ و .. )</label>
                                </div>
                                <div class="form-check ">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label" value="برندسازی کامل مجموعه">برندسازی کامل
                                        مجموعه</label>
                                </div>
                                <div class="form-check ">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label" value="طراحی و توسعه وبسایت و اپلیکیشن">طراحی و
                                        توسعه وبسایت و اپلیکیشن</label>
                                </div>
                                <div class="form-check ">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label" value="طراحی داخلی مطب">طراحی داخلی مطب</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label" value="طراحی داخلی مطب">طراحی داخلی مطب</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label" value="آموزش نیروی شما برای شبکه های اجتماعی">آموزش
                                        نیروی شما برای شبکه های اجتماعی</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label" value="عکاسی یا فیلم برداری">عکاسی یا فیلم
                                        برداری</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label" value="ساخت موشن گرافی یا تیزر تبلیغاتی">ساخت موشن
                                        گرافی یا تیزر تبلیغاتی</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label" value="کمپین تبلیغاتی">کمپین تبلیغاتی</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="text-orange" name="about_you">درباره ی خودتان و فعالیتتون بنویسید *
                                </label>
                                <textarea name="" id="" cols="30" rows="5"></textarea>
                            </div>
                            <div class="col-lg-6">
                                <label class="text-orange" name="about_work">اگر خدمتی جز موارد بالا در نظر داشتید
                                    برامون بنویسید:</label>
                                <textarea name="" id="" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
            </section>

            <section class="step" data-order="3">
                <div class="row">
                    <div class="col-lg-6">
                        <label for="" class="text-orange d-block"> آیا تا به حال با تیمی برای تبلیغات یا برندسازی کار
                            کرده اید ؟ *</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                value="option1">
                            <label class="form-check-label" for="inlineRadio1">بله</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                value="option2">
                            <label class="form-check-label" for="inlineRadio2">خیر</label>
                        </div>
                        <div class="form-group mt-3">
                            <label class="text-white">
                                اگر همکاری داشتید خوشحال میشیم بفرمایید با چه تیمی کار کردید و تجربه کاریتون چی بوده
                                ؟</label>
                            <input type="text" class="form-control " name="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="" class="text-orange d-block"> تا به حال فالور فیک به صفحتان اضافه کرده اید ؟
                            *</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                value="option1">
                            <label class="form-check-label" for="inlineRadio1">بله</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                value="option2">
                            <label class="form-check-label" for="inlineRadio2">خیر</label>
                        </div>
                        <div class="form-group mt-3">
                            <label class="text-white">
                                تعداد فالور های صفحه شما</label>
                            <input type="text" class="form-control " name="">
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="" class="text-orange d-block"> نظر شما راجع به نحوه جذب بیمار ( مخاطب ) چیست ؟</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                value="option1">
                            <label class="form-check-label">جذب بیمار برایم مهم است ، روش آن خیلی مهم نیست</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                value="option2">
                            <label class="form-check-label">در ابتدا به شان پزشکی فکر می کنم و جذب بیمار برایم در اولویت های بعدی است</label>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="form-group">
                            <label for="" class="text-orange d-block">انتظارات شما از همکاری با برندنت چیست ؟  * </label>
                        
                          <textarea class="form-control" name="" id="" rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </section>
            <div class="buttons mt-4">
                <div class="btn-group">
                    <button type="button" class="btn btn-orange text-white js-btn-submit">ثبت</button>
                    <button type="button" class="btn btn-orange js-btn-next">بعدی</button>
                    <button type="button" class="btn btn-outline-orange js-btn-back">قبلی</button>
                </div>
            </div>
        </section>
    </div>

</main>
@endsection