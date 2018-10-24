    <tr>
        <th scope="row">{{ $post->post_id }}</th>
        <td>{{ $post->post_title }}</td>
        <td>{{ $post->post_author }}</td>
        <td>{{ $post->post_view_count }}</td>
        <td>{{ $post->created_at }}</td>
        <td>
            <span class="badge badge-{{$post->post_status == 1 ?'success' : 'danger'}}">
                {{ $post->post_status == 1 ? 'فعال' : 'غیر فعال' }}
            </span>
        </td>
        <td>
            <a href="{{ route('admin.posts.delete',[$post->post_id]) }}">
                <i class="fa fa-trash"></i>
            </a>
            <a href="{{ route('admin.posts.edit',[$post->post_id]) }}">
                <i class="fa fa-edit"></i>
            </a>
        </td>
    </tr>
