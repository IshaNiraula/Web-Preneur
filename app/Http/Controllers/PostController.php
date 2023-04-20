<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostCategory;
use File;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('admin.post.list',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        $categories = PostCategory::all();
        return  view('admin.post.add',compact('posts','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=> 'required',
            'description'=> 'required',
            'category_slug'=> 'required',
            'status'=>'required',
        ]);

        $slug = Str::slug($request->title,'-');

        if($request->hasfile('image')){
            $name = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path(). '/uploads/post',$name);
            $post = new Post();
            $post->title = $request->title;
            $post->slug = $slug;
            $post->category_slug = $request->category_slug;
            $post->description = $request->description;
            $post->status = $request->status;
            $post->filename = $name;
            $post->position = $request->position;
            $post->meta_title = $request->meta_title;
            $post->meta_description = $request->meta_description;
            $post->meta_keywords = $request->meta_keywords;
            $save_post = $post->save();
            if($save_post){
                return redirect()->route('admin.post.list')->with('success','post has been added successfully.');
            }else {
                return back()->with('error','something went wrong');
            }
        }else {
            return back()->with('error','please choose an image');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
       $services = Post::where('category', 'service')->first();
       $post = Post::where('slug', $slug)->first();
       return view('client.post-details')->with(['services' => $services, 'post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $post = Post::where("id",$id)->first();
        $post = Post::find($id);
        $categories = PostCategory::all();
        return view('admin.post.edit',compact('post','categories'));
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
        $request->validate([
            'title'=> 'required',
            'description'=> 'required',
            'category_slug'=> 'required',
            'status'=>'required',
        ]);

        $slug = Str::slug($request->title,'-');
        if($request->hasfile('image')){
            $name = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path(). '/uploads/post',$name);
            $post = Post::find($id);
            $filename = $post->filename;
            if (File::exists(public_path('uploads/post/'.$filename))) {
               File::delete(public_path('uploads/post/'.$filename));
               }
            $post->title = $request->title;
            $post->slug = $slug;
            $post->category_slug = $request->category_slug;
            $post->description = $request->description;
            $post->status = $request->status;
            $post->position = $request->position;
            $post->filename = $name;
            $post->meta_title = $request->meta_title;
            $post->meta_description = $request->meta_description;
            $post->meta_keywords = $request->meta_keywords;
            $save_post = $post->save();
            if($save_post){
                return redirect()->route('admin.post.list')->with('success','post has been updated successfully.');
            }else {
                return back()->with('error','something went wrong');
            }
        }else {
            $post = Post::find($id);
            $filename = $post->filename;
            $post->title = $request->title;
            $post->slug = $slug;
            $post->category_slug = $request->category_slug;
            $post->description = $request->description;
            $post->filename = $filename;
            $post->status = $request->status;
            $post->position = $request->position;
            $post->meta_title = $request->meta_title;
            $post->meta_description = $request->meta_description;
            $post->meta_keywords = $request->meta_keywords;
            $save_post = $post->save();
            if($save_post){
                return redirect()->route('admin.post.list')->with('success','post has been updated successfully.');
            }else {
                return back()->with('error','something went wrong');
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
        $post = Post::find($id);
        $filename = $post->filename;
     if (File::exists(public_path('uploads/post/'.$filename))) {
        File::delete(public_path('uploads/post/'.$filename));
      }
        $post->delete();
        return redirect()->route('admin.post.list')->with('success','post has been deleted successfully.');
    }

    public function postEditorUpload (Request $request) 
    {
          if($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;

            //Upload File
            $request->file('upload')->move(public_path().'/uploads/editor/post', $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('uploads/editor/post/'.$filenametostore);
            $message = 'File uploaded successfully';
            $result = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$message')</script>";

            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $result;
        }
    }
}
