@extends('layouts.admin')
@section('content')
    <div class="card-title">
        <h4>دسته بندی ها</h4>
    </div>
    <div class="card-body">
        @include('partials.success')
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>نام</th>
                    <th>والد</th>
                    <th> عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <th scope="row">{{ $category->id }}</th>
                        <td>{{ $category->title }}</td>
                        <td>{{ optional($category->parent)->title }}</td>

                        <td>
                            <a href="{{ route('admin.categories.delete',[$category->id]) }}">
                                <i class="fa fa-trash"></i>
                            </a>
                            <a href="{{ route('admin.categories.edit',[$category->id]) }}">
                                <i class="fa fa-edit"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection