<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\Slider;
use App\Models\Gallery;
use App\Models\Team;
use App\Models\Testimonial;


class PageController extends Controller
{
    public function homePage () {
        $blogs = Post::where('category','blogs')->get();
        $sliders = Slider::all();
        $services = Post::where('status','=','active')->where('category','=','service')->get();
        $about = Post::where('category','about')->first();
        $galleries = Gallery::all();
        $teams = Team::take(4)->get();
        $testimonials = Testimonial::all();
        return view('client.index')->with(['services' => $services,'about' => $about,'sliders' => $sliders,'galleries' => $galleries,'blogs'=>$blogs,'teams'=>$teams,'testimonials'=>$testimonials]);
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

    public function blogDetails($slug){
        // $blogs = Post::where('category','blogs')->get();
        // $blog = Post::where('slug',$slug)->first();
        // if($blog) {
            return view('client.blog-detail');
        // }else{
        //     abort(404);
        // }
    }

    public function newsPage() {
        $news = Post::where('category','news')->get();
        return view('client.news',compact('news'));
    } 

    public function servicePage() {
         $services = Post::where('category','service')->get();
         return view('client.service')->with(['services'=>$services]);
    }

    public function serviceDetails($slug){
        $services = Post::where('category','service')->get();
        $service = Post::where('slug',$slug)->first();
        if($service) {
            return view('client.service-details',compact('services','service'));
        }else{
            abort(404);
        }
    }

    public function aboutPage () {
        return view('client.about');
    }

    public function contactPage() {
        return view('client.contact');
    }
    public function thankYouPage() {
        return view('client.thank_you');
    }

}
