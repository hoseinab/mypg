@extends('layouts.admin')
@section('content')
    <div class="card-title">
        <h4>ویرایش کاربر</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="basic-form p-10">
                    @include('partials.errors')
                    @include('partials.success')
                    <form method="post" action="{{ route('admin.categories.update',[$item->id]) }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="categoryTitle">عنوان :</label>
                            <input id="categoryTitle" name="categoryTitle" type="text"
                                   class="form-control input-default hasPersianPlaceHolder"
                                   value="{{ old('categoryTitle',$item->title) }}"
                            >
                        </div>
                        <div class="form-group">
                            <label for="categoryParent"> والد:</label>
                            <select id="categoryParent" name="categoryParent" class="form-control persianText">
                                <option value="0">بدون والد</option>
                                @foreach($categories as $id => $title)
                                    <option
                                            value="{{ $id }}"
                                            {{ $item->parent_id == $id ? 'selected' : '' }}
                                    >{{ $title }}</option>
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