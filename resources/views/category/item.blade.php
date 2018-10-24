<li>
    <input
            type="checkbox"
            name="categories[]"
            value="{{ $category->id }}"
    >
    {{ $category->title }}
    @if(isset($categories[$category->id]))
        @include('admin.category.list',['items' =>$categories[$category->id] ])
    @endif
</li>