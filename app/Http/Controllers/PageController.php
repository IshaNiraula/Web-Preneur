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
        $posts = Post::orderBy('created_at','desc')->get();
        return view('client.index',compact('posts'));
    }

    public function dashboard() {
        return view('admin.dashboard');
    }

    public function blogPage() {
        $blogs = Post::where('category','blogs')->orderBy('created_at', 'desc')->get();
        return view('client.blogs',compact('blogs'));
    } 
   public function galleryPage () {
    $galleries = Gallery::all();
    return view('client.gallery',compact('galleries'));
    }

    public function postDetail($category_slug,$post_slug){
        $posts = Post::where('category_slug',$category_slug)->orderBy('created_at', 'desc')->take(5)->get();
        $post = Post::where('slug',$post_slug)->orderBy('created_at', 'desc')->first();
        $categories = PostCategory::all();
        if($post) {
            return view('client.post-detail',compact('post','posts','categories'));
        }else{
            abort(404);
        }
    }

    public function blogCategory($slug) {
        $posts = Post::where('category_slug',$slug)->orderBy('created_at', 'desc')->paginate(9);
        $categories = PostCategory::all();
        return view('client.blog-category',compact('posts','categories'));
    }

}
