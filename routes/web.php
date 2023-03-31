<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TaxFormController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PartnerController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[PageController::class,'homePage'])->name('home');
Route::get('/about',[PageController::class,'aboutPage'])->name('about');
Route::get('/news',[PageController::class,'newsPage'])->name('news');
Route::get('/testimonials',[PageController::class,'testimonialPage'])->name('testimonials');
Route::get('/blogs',[PageController::class,'blogPage'])->name('blogs');
Route::get('/blog/{slug}',[PageController::class,'blogDetails'])->name('blogDetails');
Route::get('/post/{slug}',[PageController::class,'postDetails'])->name('postDetails');
Route::get('/galleries',[PageController::class,'galleryPage'])->name('galleries');
Route::get('/contact',[PageController::class,'contactPage'])->name('contact');
Route::post('contact',[ContactController::class,'contactMail'])->name('contact.mail');
Auth::routes();
Route::get('/services',[PageController::class,'servicePage'])->name('services');
Route::get('/service/{slug}',[PageController::class,'serviceDetails'])->name('serviceDetails');
Route::get('/thank-you',[PageController::class,'thankYouPage']);
Route::middleware('auth')->name('admin.')->group(function() {
    Route::get('/admin/dashboard',[PageController::class,'dashboard']);
    //service controller
    Route::get('/admin/post/list',[PostController::class,'index'])->name('post.list');
    Route::get('/admin/post/add',[PostController::class,'create'])->name('post.add');
    Route::post('/admin/post/add',[PostController::class,'store'])->name('post.store');
    Route::get('/admin/post/edit/{id}',[PostController::class,'edit'])->name('post.edit');
    Route::post('/admin/post/update/{id}',[PostController::class,'update'])->name('post.update');
    Route::post('/admin/post/delete/{id}',[PostController::class,'destroy'])->name('post.delete');
    Route::post('/upload_post_editor_image',[PostController::class, 'postEditorUpload'])->name('post.editor.upload');

    //slider controller
    Route::get('/admin/slider/list',[SliderController::class,'index'])->name('slider.list');
    Route::get('/admin/slider/add',[SliderController::class,'create'])->name('slider.add');
    Route::post('/admin/slider/add',[SliderController::class,'store'])->name('slider.store');
    Route::get('/admin/slider/edit/{id}',[SliderController::class,'edit'])->name('slider.edit');
    Route::post('/admin/slider/update/{id}',[SliderController::class,'update'])->name('slider.update');
    Route::post('/admin/slider/delete/{id}',[SliderController::class,'destroy'])->name('slider.delete');

    //gallery controller
    Route::get('/admin/gallery/list',[GalleryController::class,'index'])->name('gallery.list');
    Route::get('/admin/gallery/add',[GalleryController::class,'create'])->name('gallery.add');
    Route::post('/admin/gallery/add',[GalleryController::class,'store'])->name('gallery.store');
    Route::post('/admin/gallery/delete/{id}',[GalleryController::class,'destroy'])->name('gallery.delete');

        //partner controller
        Route::get('/admin/partner/list',[PartnerController::class,'index'])->name('partner.list');
        Route::get('/admin/partner/add',[PartnerController::class,'create'])->name('partner.add');
        Route::post('/admin/partner/add',[PartnerController::class,'store'])->name('partner.store');
        Route::post('/admin/partner/delete/{id}',[PartnerController::class,'destroy'])->name('partner.delete');

    //testimonial
    Route::get('/admin/testimonial/list',[TestimonialController::class,'index'])->name('testimonial.list');
    Route::get('/admin/testimonial/add',[TestimonialController::class,'create'])->name('testimonial.add');
    Route::post('/admin/testimonial/add',[TestimonialController::class,'store'])->name('testimonial.store');
    Route::get('/admin/testimonial/edit/{id}',[TestimonialController::class,'edit'])->name('testimonial.edit');
    Route::post('/admin/testimonial/update/{id}',[TestimonialController::class,'update'])->name('testimonial.update');
    Route::post('/admin/testimonial/delete/{id}',[TestimonialController::class,'destroy'])->name('testimonial.delete');
   
    //team
    Route::get('/admin/team/list',[TeamController::class,'index'])->name('team.list');
    Route::get('/admin/team/add',[TeamController::class,'create'])->name('team.add');
    Route::post('/admin/team/add',[TeamController::class,'store'])->name('team.store');
    Route::get('/admin/team/edit/{id}',[TeamController::class,'edit'])->name('team.edit');
    Route::post('/admin/team/update/{id}',[TeamController::class,'update'])->name('team.update');
    Route::post('/admin/team/delete/{id}',[TeamController::class,'destroy'])->name('team.delete');

 });


