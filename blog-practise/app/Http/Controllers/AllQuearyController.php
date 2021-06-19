<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllQuearyController extends Controller
{
    public function index()
    {
        // $category = Category::select('id', 'title')->orderByDesc('title')->get();

        // $tag = Tag::select('id', 'name')->orderByDesc(
        //     DB::table('post_tag')->selectRaw('count(tag_id) as tag_count')->whereColumn('tags.id', 'post_tag.tag_id')->orderBy('tag_count', 'desc')->limit(1)
        // )->get();

        // $latest_products = Post::select('id', 'title')->latest()->take(5)->withCount('comments')->get();


        //for blog application

        // $post = Post::select('id', 'title')->orderByDesc(
        //     Comment::selectRaw('count(post_id) as comment_count')->whereColumn('posts.id', 'comments.post_id')->orderBy('comment_count', 'desc')->limit(1)
        // )->withCount('comments')->get();


        // $post = Post::select('id', 'title')->orderByDesc('comments_count')->withCount('comments')->get();


        // $user = User::select('id', 'name')->orderByDesc(
        //     Post::selectRaw('count(user_id) as no_of_post')->whereColumn('posts.user_id', 'users.id')->orderBy('no_of_post')
        // )->withCount('posts')->get();


        // $user = User::select('id', 'name')->withCount('posts')->orderByDesc('posts_count')->get();


        //most commented categories


        // $most_popular_comments = Category::select('id', 'title')->withCount('comments')->orderByDesc('comments_count')->get();


        // $post  = Post::with('comments')->find(5);
        // $post  = Post::with('comments')->find(5);

        // $tag = Tag::with(['posts' => function ($q) {
        //     $q->select('posts.id', 'posts.title')->where('posts.id', 24);
        // }])->find(2);


        // $blog = Post::where('title', 'you don', '% was %')->orWhere('content', 'like', '% fugit %')->get();



        //same thing possible using full text seatching and it's faster

        // $post = Post::whereRaw('MATCH(title,content)  AGAINST( ? IN BOOLEAN MODE)', '-Consequatur +Quidem -iusto -down -table +Quidem')->get();



        $sort_by = 'name';
        $user = User::orderByDesc($sort_by)->get();



        dd($user);
    }
}
