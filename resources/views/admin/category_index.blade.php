@extends('layouts.main-admin')
@section('title')
Brandent
@endsection
@section('content')
@include('layouts.menu-admin')
<div class="card card-body">
    @include('layouts.message')
    <form action="{{ route('category_store')}}">
        <div class="modal fade" id="modal_create" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-right d-block">افزودن دسته</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <table class="table">
                                <tr>
                                    <td>نام دسته</td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name">
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
    {{-- end-modal-store --}}
    <form action="{{route('category_update')}}">
        <div class="modal fade" id="modal_edit" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-right d-block">افزودن دسته</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" class="js_category_id" name="id">
                        <div class="container-fluid">
                            <table class="table">
                                <tr>
                                    <td>نام دسته</td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" value="" class="js_category_value form-control"
                                                name="name">
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
    {{-- end-modal-edit --}}
    <div class="d-flex header justify-content-between">
        <div class="title pt-2 h4 font-weight-bold">
            مدیریت دسته ها
        </div>
        <div class="new">
            <button class="btn btn-dark" data-toggle="modal" data-target="#modal_create">افزودن جدید</button>
        </div>
    </div>
    {{-- end-header --}}

    <table id="table-category" class="table text-center">
        <thead>
            <th class=" text-center">#</th>
            <th class=" text-center">نام دسته</th>
            <th class=" text-center">عملیات</th>
        </thead>
    </table>

</div>
</div>
</div>
@endsection