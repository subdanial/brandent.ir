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
    <form action="{{route('consulting_store')}}" method="POST" id="consulting">
        @csrf
        <div class="d-flex desktop-center">
            <section class="consulting-form position-relative">
                <h2 class="text-orange font-weight-bolder position-absolute"> فرم همکاری با برندنت</h2>
                <section class="step" data-order="1">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class=""> نام و نام خانوادگی * </label>
                                <input type="text" class="form-control" name="fullname" required>
                            </div>
                            <div class="form-group">
                                <label class=""> آیدی پیج اینستاگرامتون ( پیج کاری ) </label>
                                <input type="text" class="form-control" name="instagram">
                            </div>
                            <div class="form-group">
                                <label class="">ایمیل </label>
                                <input type="text" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class=""> شماره موبایل * </label>
                                <input type="number" class="form-control" name="phone" required>
                            </div>
                            <div class="form-group">
                                <label class="">اگر وبسایت دارید </label>
                                <input type="text" class="form-control  ltr" name="site" placeholder="http://">
                            </div>
                        </div>
                    </div>

                </section>
                <section class="step" data-order="2">
                    <div class="row">
                        <div class="col-12">
                            <label class="text-orange d-block"> در چه حوزه ای فعالیت می کنید ؟ *</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="دندان پزشک" name="activity[]">
                                <label class="form-check-label" value="دندان پزشک">دندان پزشک</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="پزشک" name="activity[]">
                                <label class="form-check-label" value="پزشک">پزشک</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" value="سرمایه گذار / مدیر کلینیک" type="checkbox"
                                    name="activity[]">
                                <label class="form-check-label">سرمایه گذار / مدیر
                                    کلینیک</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="سرمایه گذار / مدیر کلینیک"
                                    name="activity[]">
                                <label class="form-check-label">سرمایه گذار / مدیر
                                    کلینیک</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="استارت آپ" name="activity[]">
                                <label class="form-check-label">استارت آپ</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="فعالیت خارج از حوزه علوم پزشکی"
                                    name="activity[]">
                                <label class="form-check-label">فعالیت خارج از
                                    حوزه
                                    علوم پزشکی</label>
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <label class="text-orange d-block"> به دنبال دریافت چه خدماتی هستید ؟ *</label>
                            <div class="clearfix"></div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-check ">
                                        <input class="form-check-input" type="checkbox" name="services[]"
                                            value="مشاوره برندسازی شخصی / استارت آپ ">
                                        <label class="form-check-label">مشاوره برندسازی شخصی / استارت آپ / ..</label>
                                    </div>
                                    <div class="form-check ">
                                        <input class="form-check-input" type="checkbox" name="services[]"
                                            value="طراحی هویت بصری برند ( لوگو ، سربرگ و .. )">
                                        <label class="form-check-label">طراحی هویت بصری برند (لوگو ،سربرگ و .. )</label>
                                    </div>
                                    <div class="form-check ">
                                        <input class="form-check-input" type="checkbox" name="services[]"
                                            value="برندسازی کامل مجموعه">
                                        <label class="form-check-label" value="برندسازی کامل مجموعه">برندسازی کامل
                                            مجموعه</label>
                                    </div>
                                    <div class="form-check ">
                                        <input class="form-check-input" type="checkbox" name="services[]"
                                            value="طراحی و توسعه وبسایت و اپلیکیشن">
                                        <label class="form-check-label">طراحی و
                                            توسعه وبسایت و اپلیکیشن</label>
                                    </div>
                                    <div class="form-check ">
                                        <input class="form-check-input" type="checkbox" name="services[]"
                                            value="طراحی داخلی مطب">
                                        <label class="form-check-label">طراحی داخلی مطب</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="services[]"
                                            value="طراحی داخلی مطب">
                                        <label class="form-check-label">طراحی داخلی مطب</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="services[]"
                                            value="آموزش نیروی شما برای شبکه های اجتماعی">
                                        <label class="form-check-label">آموزش نیروی شما برای شبکه های اجتماعی</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="services[]"
                                            value="عکاسی یا فیلم برداری">
                                        <label class="form-check-label">عکاسی یا فیلم
                                            برداری</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="services[]"
                                            value="ساخت موشن گرافی یا تیزر تبلیغاتی">
                                        <label class="form-check-label">ساخت
                                            موشن
                                            گرافی یا تیزر تبلیغاتی</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="services[]"
                                            value="کمپین تبلیغاتی">
                                        <label class="form-check-label">کمپین تبلیغاتی</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="text-orange">درباره ی خودتان و فعالیتتون بنویسید *
                                    </label>
                                    <textarea name="about_you" id="" cols="30" rows="5" required></textarea>
                                </div>
                                <div class="col-lg-6">
                                    <label class="text-orange">اگر خدمتی جز موارد بالا در نظر داشتید
                                        برامون بنویسید:</label>
                                    <textarea  name="about_work" cols="30" rows="5" name="about_service"></textarea>
                                </div>
                            </div>
                        </div>
                </section>

                <section class="step" data-order="3">
                    <div class="row">
                        <div class="col-lg-6">
                            <label class="text-orange d-block"> آیا تا به حال با تیمی برای تبلیغات یا برندسازی
                                کار
                                کرده اید ؟ *</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="branded_before" value="yes">
                                <label class="form-check-label">بله</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="branded_before" value="no">
                                <label class="form-check-label">خیر</label>
                            </div>
                            <div class="form-group mt-3">
                                <label class="text-white">
                                    اگر همکاری داشتید خوشحال میشیم بفرمایید با چه تیمی کار کردید و تجربه کاریتون چی بوده
                                    ؟</label>
                                <input type="text" class="form-control " name="branded_before_detail">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="text-orange d-block"> تا به حال فالور فیک به صفحتان اضافه کرده اید ؟
                                *</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="fake_follower" value="yes">
                                <label class="form-check-label">بله</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="fake_follower" value="no">
                                <label class="form-check-label">خیر</label>
                            </div>
                            <div class="form-group mt-3">
                                <label class="text-white">
                                    تعداد فالور های صفحه شما</label>
                                <input type="text" class="form-control " name="count_follower">
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="text-orange d-block"> نظر شما راجع به نحوه جذب بیمار ( مخاطب ) چیست
                                ؟</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="conscience" value="no">
                                <label class="form-check-label">جذب بیمار برایم مهم است ، روش آن خیلی مهم نیست</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="conscience" value="yes">
                                <label class="form-check-label">در ابتدا به شان پزشکی فکر می کنم و جذب بیمار برایم در
                                    اولویت
                                    های بعدی است</label>
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <div class="form-group">
                                <label class="text-orange d-block">انتظارات شما از همکاری با برندنت چیست ؟ *
                                </label>

                                <textarea class="form-control" name="expectation" rows="3" required></textarea>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="buttons mt-4">
                    <div class="btn-group">
                        <button type="submit" class="btn btn-orange text-white js-btn-submit" disabled>ثبت</button>
                        <button type="button" class="btn btn-orange js-btn-next" disabled>بعدی</button>
                        <button type="button" class="btn btn-outline-orange js-btn-back">قبلی</button>
                    </div>
                </div>
            </section>
        </div>
    </form>

</main>
@endsection