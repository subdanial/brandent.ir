@extends('layouts.main-admin')
@section('title')
Brandent
@endsection
@section('content')
@include('layouts.menu-admin')
<div class="card card-body">
    @include('layouts.message')
    <form action="{{route('work_store')}}">
        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-right d-block">افزودن تصویر جدید <small
                                class="text-muted d-block">حداکثر 4 مگابایت استاندارد 500 کلیوبایت</small></h5><br>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <table class="table">
                                <tr>
                                    <td>تصویر</td>
                                    <td>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group">
                                                    <span class="btn btn-dark btn-block mb-2 btn-file">
                                                        انتخاب عکس <input type="file" required
                                                            class="custom-file-input js-btn-upload-gallery right-0 top-0 position-absolute h-3-em w-100"
                                                            name="picture" id="picture">
                                                    </span>
                                                </span>
                                                <input type="text" class="form-control w-100 mb-2"
                                                    value="نام عکس آپلود شده" readonly>
                                            </div>
                                            <img id='img-upload' class="w-100 d-block mx-auto" />
                                            <div id="uploaded_image" class="w-100 d-block text-right mt-2"></div>
                                            <input type="hidden" required class="js-image-name" name="image">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>کپشن</td>
                                    <td>
                                        <div class="form-group">
                                            <textarea class="form-control" required name="describe" rows="3"></textarea>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer float-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">لغو</button>
                        <button type="submit" class="btn btn-dark js-submit-gallery-image">ذخیره</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    {{-- end-modal-create --}}
    <div class="d-flex header justify-content-between">
        <div class="title pt-2 h4 font-weight-bold">
            مدیریت نمونه کار ها
        </div>
        <div class="new">
            <button class="btn btn-dark" data-toggle="modal" data-target="#modelId">افزودن جدید</button>
        </div>
    </div>
    <table id="table-work" class="table text-center">
        <thead>
            <th class=" text-center">#</th>
            <th class=" text-center">تصویر</th>
            <th class=" text-center">کپشن</th>
            <th class=" text-center">عملیات</th>
        </thead>
    </table>
</div>
</div>
</div>
@endsection