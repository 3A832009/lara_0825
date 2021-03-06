<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Comment;
use App\Http\Controllers\PostsController;
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

Route::get('/', function () {
//    return view('welcome');
//    新增資料
//    $post=new Post();
//    $post->title='test title';
//    $post->content='test content';
//    $post->save();

//    新增資料
//    Post::create([
//        'title'=>'test title',
//        'content'=>'test content',
//    ]);

//    尋找資料
//    $posts=Post::all();
//    dd($posts);
//    $post=Post::find(1);
//    dd($post);

//    條件式尋找資料
//    $posts=Post::where('id','<',10)->orderBy('id','DESC')->get();
//    dd($posts);

//    更新資料
//    $post=Post::find(1);
//    $post->update([
//        'title'=>'updated title',
//        'content'=>'updated content',
//    ]);

//    更新資料
//    $post=Post::find(1);
//    $post->title='saved title';
//    $post->content='saved content';
//    $post->save();

//    刪除資料
//    $post=Post::find(1);
//    $post->delete();
//    Post::destroy(2);
//    Post::destroy(3,5,7);

//    $allPosts=Post::all();
//    dd($allPosts);
//    $featuredPosts=Post::where('is_feature',1)->get();
//    dd($featuredPosts);

//    $fourthPost=Post::find(4);
//    dd($fourthPost);
//    $lastPost=Post::orderBy('id','DESC')->first();
//    dd($lastPost);
//    $post=Post::find(1);
//    echo $post->title.'<br>';
//    foreach ($post->comments as $comment){
//        echo $comment->content.'<br>';
//    }
    $comment=Comment::find(1);
    echo $comment->content.'<br>';
    $post=$comment->post;
    echo $post->id.'<br>';
    echo $post->title.'<br>';
    echo $post->content.'<br>';
});

Route::get('posts', [\App\Http\Controllers\PostsController::class, 'index'])->name('posts.index');
Route::get('post', [\App\Http\Controllers\PostsController::class, 'show'])->name('posts.show');
Route::get('contact', [\App\Http\Controllers\PostsController::class, 'contact'])->name('posts.contact');
Route::get('about', [\App\Http\Controllers\PostsController::class, 'about'])->name('posts.about');
