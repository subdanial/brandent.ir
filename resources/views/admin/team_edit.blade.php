@extends('layouts.main-admin')
@section('title')
Brandent
@endsection
@section('content')
@include('layouts.menu-admin')
<div class="card card-body px-5">
    <div class="container px-5">
        <form action="{{route('team_update',$teammate)}}" class="px-5">
            <div class="title pt-2 h4 font-weight-bold">
                ویرایش همکار
            </div>
            <table class="table">
                <tr>
                    <td>تصویر</td>
                    <td>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group">
                                    <span class="btn btn-dark btn-block mb-2 btn-file">
                                        انتخاب عکس <input type="file" class="custom-file-input js-btn-upload-gallery right-0 top-0 position-absolute h-3-em w-100"
                                            name="picture" id="picture">
                                    </span>
                                </span>
                                <input type="text" style="direction: ltr!important" class="form-control w-100 mb-2"
                                    value="{{$teammate->image}}" readonly>
                            </div>
                            <img id='img-upload' class="w-100 d-block mx-auto" />
                            <div id="uploaded_image" class="w-100 d-block text-right mt-2"></div>
                            <input type="hidden" required class="js-image-name" name="image">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>نام</td>
                    <td>
                        <div class="form-group">
                            <input type="text" class="form-control" required name="name" value="{{$teammate->name}}">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>معرفی</td>
                    <td>
                        <div class="form-group">
                            <textarea class="form-control" required name="describe"
                                rows="3">{{$teammate->describe}}</textarea>
                        </div>
                    </td>
                </tr>
            </table>
            <button type="submit" class="btn btn-dark">دخیره</button>
        </form>
    </div>
</div>
@endsection