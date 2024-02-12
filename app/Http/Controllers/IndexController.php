<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;
use App\Models\Post;

class IndexController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('order')->get();

        return view('index')->with(['categories' => $categories]);
    }

    public function blogs()
    {
        $blogs = Post::with('category', 'user')->where('type','BLOG')->whereStatus('PUBLISHED')->latest()->paginate(25);

        return view('blogs')->with([
            'title' => 'Blogs',
            'blogs' => $blogs
        ]);
    }

    public function categoryBlogs($category)
    {
        $category = Category::whereSlug($category)->firstOrFail();
        $blogs = Post::with('category', 'user')
            ->where(['status' => 'PUBLISHED', 'category_id' => $category->id])
            ->latest()
            ->paginate(25);

        return view('blogs')->with([
            'title' => $category->name . ' Blogs',
            'blogs' => $blogs
        ]);
    }

    public function tagBlogs($tag)
    {
        $tag = Tag::whereTagName($tag)->firstOrFail();
        $blogs = $tag->posts->where('status', 'PUBLISHED');

        return view('blogs')->with([
            'title' => $tag->name . ' Blogs',
            'blogs' => $blogs
        ]);
    }

    public function blogDetail($slug)
    {
        $blog = Post::whereSlug($slug)->firstOrFail();

        $recentBlogs = Post::with('category', 'user')->whereStatus('PUBLISHED')->latest()->take(6)->get();

        return view('blog-single')->with([
            'blog' => $blog,
            'recentBlogs' => $recentBlogs
        ]);
    }

    public function authorPage($id)
    {
        $user = User::with('posts')->findOrFail($id);

        return view('author')->with(['user' => $user]);
    }

    public function courses()
    {
        $blogs = Post::with('category', 'user')->where('type','COURSE')->whereStatus('PUBLISHED')->latest()->paginate(25);

        return view('blogs')->with([
            'title' => 'Courses',
            'blogs' => $blogs
        ]);
    }
}
