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


class PageController extends Controller
{
    public function homePage () {
        $top_posts = Post::offset(0)->limit(4)->get();
        $sidebarPosts = Post::offset(4)->limit(3)->get();
        $sl_posts = Post::offset(7)->limit(6)->get();
        return view('client.index',compact('top_posts','sidebarPosts','sl_posts'));
    }

    public function dashboard() {
        return view('admin.dashboard');
    }

    public function blogPage() {
        $blogs = Post::where('category','blogs')->get();
        return view('client.blogs',compact('blogs'));
    } 
   public function galleryPage () {
    $galleries = Gallery::all();
    return view('client.gallery',compact('galleries'));
    }

    public function postDetail($slug){
        $posts = Post::take(5)->get();
        $post = Post::where('slug',$slug)->first();
        $categories = PostCategory::all();
        if($post) {
            return view('client.post-detail',compact('post','posts','categories'));
        }else{
            abort(404);
        }
    }

    public function blogCategory($slug) {
        $posts = Post::where('category_slug',$slug)->paginate(6);
        $categories = PostCategory::all();
        return view('client.blog-category',compact('posts','categories'));
    }

}
