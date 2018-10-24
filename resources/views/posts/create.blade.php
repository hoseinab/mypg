@extends('layouts.admin')
@section('content')
    <div class="card-title">
        <h4>ایجاد مطلب جدید</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="basic-form p-10">
                    @include('partials.errors')
                    @include('partials.success')
                    <form method="post" action="{{ route('admin.posts.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="postTitle">عنوان</label>
                            <input id="postTitle" name="postTitle" type="text"
                                   class="form-control input-default hasPersianPlaceHolder"
                                   value="{{ old('postTitle') }}"
                            >
                        </div>
                        <div class="form-group">
                            <label for="postContent">محتوا</label>
                            <textarea
                                    rows="10"
                                    id="postContent"
                                    name="postContent"
                                    class="form-control input-default"
                            >{{ old('postTitle') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="postCategories">دسته بندی ها :</label>
                            <div class="postCategories">
                                @include('admin.category.list',['items' => $categories['root']])
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="postTags">برچسب ها:</label>
                            <select multiple style="min-width: 300px;" name="postTags[]" id="postTags">
                                @foreach($allTags as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="postImage">تصویر مطلب :</label>
                            <input type="file" name="postImage">
                        </div>
                        <div class="form-group">
                            <label for="postStatus">وضعیت :</label>
                            <select name="postStatus" id="postStatus" class="form-control">
                                @foreach($postStatuses as $postStatus => $postStatusTitle)
                                    <option value="{{ $postStatus }}">{{ $postStatusTitle }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group m-t-20">
                            <button type="submit" class="btn btn-primary m-b-10 m-l-5">ثبت اطلاعات
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection