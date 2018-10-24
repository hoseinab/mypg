@extends('layouts.admin')
@section('content')
    <div class="card-title">
        <h4>ویرایش مطلب</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="basic-form p-10">
                    @include('partials.errors')
                    @include('partials.success')
                    <form method="post" action="{{ route('admin.posts.update',[$post->post_id]) }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="postTitle">عنوان</label>
                            <input id="postTitle" name="postTitle" type="text"
                                   class="form-control input-default hasPersianPlaceHolder"
                                   value="{{ old('postTitle',$post->post_title) }}"
                            >
                        </div>
                        <div class="form-group">
                            <label for="postContent">محتوا</label>
                            <textarea
                                    rows="10"
                                    id="postContent"
                                    name="postContent"
                                    class="form-control input-default"
                            >{{ old('postContent',$post->post_content) }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="postCategories">دسته بندی ها :</label>
                            <div class="postCategories">
                                <ul>
                                    @foreach($categories as $category)
                                        <li>
                                            <input
                                                    type="checkbox"
                                                    name="categories[]"
                                                    value="{{ $category->id }}"
                                                    {{ in_array($category->id,$postCategories) ? 'checked' : '' }}
                                            >
                                            {{ $category->title }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="postTags">برچسب ها:</label>
                            <select multiple style="min-width: 300px;" name="postTags[]" id="postTags">
                                @foreach($allTags as $tag)
                                    <option
                                            value="{{ $tag->id }}"
                                            {{ in_array($tag->id,$postTags) ? 'selected' : '' }}

                                    >{{ $tag->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="postImage">تصویر مطلب :</label>
                            <input type="file" name="postImage">
                            @if(!empty($post->post_image))
                                <img width="100" height="100" src="{{ $post->post_image }}" alt="">
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="postStatus">وضعیت :</label>
                            <select name="postStatus" id="postStatus" class="form-control">
                                @foreach($postStatuses as $postStatus => $postStatusTitle)
                                    <option
                                            value="{{ $postStatus }}"
                                            {{ $post->post_status == $postStatus ? 'selected' : '' }}
                                    >{{ $postStatusTitle }}</option>
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