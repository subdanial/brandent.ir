@extends('layouts.main-admin')
@section('title')
Brandent
@endsection

@section('content')

@include('layouts.menu-admin')
<div class="card card-body">
    @include('layouts.message')
    <div class="d-flex header justify-content-between">
        <div class="title pt-2 h4 font-weight-bold">
            مدیریت پست ها
        </div>
        <div class="new">
            <a class="btn btn-dark" href="{{route('post_create')}}">افزودن جدید</a>
        </div>
    </div>
    <table id="table-post" class="table text-center">
        <thead>
            <th class=" text-center">#</th>
            <th class=" text-center">تصویر</th>
            <th class=" text-center">عنوان</th>
            <th class=" text-center">متن کوتاه</th>
            <th class=" text-center">انتشار</th>
            <th class=" text-center">عملیات</th>
        </thead>
    </table>

</div>
</div>

</div>




@endsection