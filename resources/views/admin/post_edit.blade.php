@extends('layouts.main-admin')
@section('title')
Brandent
@endsection

@section('content')

@include('layouts.menu-admin')
<div class="card card-body">
    @include('layouts.message')
    <form action="{{route('post_update',$post->id)}}" method="POST">
        @csrf
        <strong class="h3 mb-2 mr-2">ویرایش پست</strong>
        <div class="row">
            <div class="col-4">
                <table class="table">
                    <tr>
                        <td class="border-0">
                            <label>عنوان</label>
                            <div class="form-group">
                            <input type="text" class="form-control" required name="title" value="{{$post->title}}">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>تصویر</label>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group">
                                        <span class="btn btn-dark btn-block mb-2 btn-file">
                                            انتخاب عکس <input type="file"
                                                class="custom-file-input js-btn-upload-gallery  right-0 top-0 position-absolute h-3-em w-100" name="picture"
                                                id="picture" >
                                        </span>
                                    </span>
                                    <input type="text" value="{{$post->image}}" style="direction: ltr!important" class="form-control w-100 mb-2"
                                        value="" readonly>
                                </div>
                                <img id='img-upload' class="w-100 d-block mx-auto" />
                                <div id="uploaded_image" class="w-100 d-block text-right mt-2"></div>
                                <input type="hidden" required class="js-image-name" name="image">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>متن کوتاه</label>
                            <div class="form-group">
                                <textarea class="form-control" required name="content_short" rows="3">{{$post->content_short}}</textarea>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>دسته</label>
                            <div class="form-group">
                                <div class="form-group">
                                    <label for=""></label>
                                    <select class="form-control" required name="category_id" id="">
                                        @foreach ($categories as $category)
                                        <option value="{{$category->id}}" {{ $category->id == $post->category_id ? 'selected' : '' }}>{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                        </td>
                    </tr>
                </table>
                <button type="submit" class="btn btn-dark btn-block">دخیره</button>
            </div>
            <div class="col-8">
                <label class="pb-2">محتوای پست</label>
                <textarea id="tiny" name="content" class="mt-1 w-100">{{$post->content}}</textarea>
            </div>
        </div>
    </form>
</div>
</div>

</div>




@endsection