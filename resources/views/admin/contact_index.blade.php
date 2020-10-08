@extends('layouts.main')
@section('title')
Brandent
@endsection

@section('content')

@include('layouts.menu-admin')
<form action="{{route('contact_update')}}">
    <div class="card card-body">
        @include('layouts.message')
        <div class="container px-5">
            <div class="title text-right pt-2 h4 font-weight-bold">
                مدیریت تماس
            </div>
            <table class="table text-right">
                <tr>
                    <td> <span class="d-block text-right">آدرس</span></td>
                    <td>
                        <div class="form-group">
                            <small class="help">آدرس</small>
                            <input type="text" value="{{$contact->address}}" class="form-control" placeholder="آدرس"
                                name="address">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td> <span class="d-block text-right">اینستاگرام</span></td>
                    <td>
                        <div class="d-flex">
                            <div class="w-75">
                                <small class="help">نام اینستاگرام</small>
                                <input type="text" class="form-control w-50" value=" {{$contact->instagram_name}}"
                                    placeholder="نام اینستاگرام" name="instagram_name">
                            </div>
                            <div  class="w-75">
                                <small class="help">آدرس اینستاگرام</small>
                                <input type="text" class="form-control w-50" value=" {{$contact->instagram_address}}"
                                    placeholder="آدرس اینستاگرام" name="instagram_address">
                            </div>

                        </div>
                    </td>
                </tr>
                <tr>
                    <td> <span class="d-block text-right">واتس آپ</span></td>
                    <td>
                        <div class="d-flex">
                            <div class="w-75">
                                <small class="help">نام واتساپ</small>
                                <input type="text" dir="ltr" class="form-control w-50" value="{{$contact->whatsapp_name}}"
                                    placeholder="نام واتساپ" name="whatsapp_name">
                            </div>
                            <div class="w-75">
                                <small class="help"> واتساپ لینک</small>

                                <input type="text" class="form-control w-50" value="{{$contact->whatsapp_address}}"
                                    placeholder="آدرس واتساپ" name="whatsapp_address">
                            </div>

                        </div>
                    </td>
                </tr>
                <tr>
                    <td> <span class="d-block text-right">ایمیل</span></td>
                    <td>
                        <div class="form-group">
                            <small class="help">آدرس ایمیل</small>
                            <input type="text" class="form-control" value="{{$contact->email}}" placeholder="آدرس ایمیل"
                                name="email">
                        </div>
                    </td>
                </tr>
            </table>
            <button class="btn btn-dark" type="submit">به روز رسانی</button>
        </div>
    </div>
</form>




@endsection