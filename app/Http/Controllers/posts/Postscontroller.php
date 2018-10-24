<?php

namespace App\Http\Controllers\posts;

use App\models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Postscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::get();

        return view('posts.list', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Gate::denies('posts.create')) {
            abort(403);
        }
        $postStatuses       = Post::postStatuses();
        $allCategories      = Category::get();
        $allTags            = Tag::get();
        $categories         = $allCategories->groupBy('parent_id');
        $categories['root'] = $categories[''];
        unset($categories['']);

        return view('admin.posts.create', compact('postStatuses', 'categories', 'allTags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        if ($post && $post instanceof Post) {
            $postData = [
                'post_title'   => $request->input('postTitle'),
                'post_slug'    => $request->input('postTitle'),
                'post_content' => $request->input('postContent'),
                'post_status'  => $request->input('postStatus')
            ];

            $updateResult = $post->update($postData);
            if ($updateResult) {
                $categories = $request->input('categories');
                if (count($categories) > 0) {
                    $post->categories()->sync($categories);
                }

                $tags = $request->input('postTags');
                foreach ($tags as $key => $tag) {
                    if (intval($tag) == 0) {
                        unset($tags[$key]);
                        $newTag = Tag::create(['name' => $tag]);
                        $tags[] = $newTag->id;
                    }
                }
                $tags = array_map(function ($item) {
                    return intval($item);
                }, $tags);
                $tags = array_unique($tags);
                $post->tags()->sync($tags);

                return redirect()->route('admin.posts')->with('status', 'مطلب با موفقیت به روز رسانی گردید!');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
    }
}
