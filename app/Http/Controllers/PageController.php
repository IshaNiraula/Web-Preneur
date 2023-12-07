<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\Slider;
use App\Models\Gallery;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\PostCategory;
use App\Models\Profile;

class PageController extends Controller
{
    public function homePage()
    {
        $slider = Post::where('slider', 1)->first();
        $sliders = Post::where('slider', 1)->get();
        $topsidebar = Post::where('topsidebar', 1)->get();
        $iseditor = Post::where('iseditor', 1)->get();
        $istrending = Post::where('istrending', 1)->get();
        $weeklypost = Post::where('weeklypost', 1)->get();
        $posts = Post::orderBy('created_at', 'desc')->get();
        $recentFirstPost = Post::orderBy('created_at', 'asc')->first();
        $secondToForthPosts = Post::orderBy('created_at', 'asc')->skip(1)->take(4)->get();
        $categories = PostCategory::orderBy('created_at', 'asc')->take(4)->get();
        return view('client.index', compact('posts', 'slider', 'topsidebar', 'iseditor', 'istrending', 'recentFirstPost', 'secondToForthPosts', 'categories', 'sliders', 'weeklypost'));
    }

    public function blogPage()
    {
        $blogs = Post::where('category', 'blogs')->orderBy('created_at', 'desc')->get();
        return view('client.blogs', compact('blogs'));
    }

    public function contactPage()
    {
        $profile = Profile::get()->first();
        return view('client.contact', compact('profile'));
    }

    public function galleryPage()
    {
        $galleries = Gallery::all();
        return view('client.gallery', compact('galleries'));
    }

    public function postDetail($post_slug)
    {
        $posts = Post::orderBy('created_at', 'desc')->take(5)->get();
        $post = Post::where('slug', $post_slug)->orderBy('created_at', 'desc')->first();
        $recentFirstPost = Post::orderBy('created_at', 'asc')->first();
        $secondToForthPosts = Post::orderBy('created_at', 'asc')->skip(1)->take(4)->get();
        $categories = PostCategory::all();
        if ($post) {
            return view('client.post-detail', compact('post', 'posts', 'categories', 'recentFirstPost', 'secondToForthPosts'));
        } else {
            abort(404);
        }
    }

    public function categoryPage($category_slug)
    {
        $recentFirstPost = Post::orderBy('created_at', 'asc')->first();
        $secondToForthPosts = Post::orderBy('created_at', 'asc')->skip(1)->take(4)->get();
        $categories = PostCategory::orderBy('created_at', 'asc')->take(4)->get();
        $posts = Post::orderBy("created_at", "desc")->where("category_slug", $category_slug)->paginate(4);
      
        return view('client.category-detail', compact('posts','categories','recentFirstPost','secondToForthPosts'));
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function blogCategory($slug)
    {
        $posts = Post::where('category_slug', $slug)->orderBy('created_at', 'desc')->paginate(9);
        $categories = PostCategory::all();
        return view('client.blog-category', compact('posts', 'categories'));
    }
}
