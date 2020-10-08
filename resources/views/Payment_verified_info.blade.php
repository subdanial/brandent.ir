@extends('layouts.main')
@section('content')
<main id="error" class="bg-blue" dir="rtl">
    <div class="vh-100">
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="card card-body">
                    <h1 class="text-center w-100">ثبت نام باموفیت انجام شد</h1>
                    <table class="table text-right">
                        <tr>
                            <td>ایمیل شما : </td>
                            <td>{{$email}}</td>
                        </tr>
                        <tr>
                            <td>شماره تماس شما: </td>
                            <td>{{$phone}}</td>
                        </tr>
                        <tr>
                            <td>رمز عبور شما : </td>
                            <td>{{$password}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection