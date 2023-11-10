<?php
use App\Models\Post;
use Spatie\Sheets\Facades\Sheets;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $posts = Sheets::collection('posts')->all();
    return view('posts.index',[
        'posts' => $posts
        ]);
    });

Route::get('/posts/{slug}', function ($slug) {
    $post = Sheets::collection('posts')->all()->where('slug',$slug)->first();
    abort_if(is_null($post),404);

    return view('posts.show',[
        'post' => $post
    ]);
});
//this is looking for the authors route and will as a result show the app
// filter authors from the url
//'then add this into the code

Route::get('/authors/{author}', function ($author) {
    $posts = Sheets::collection('posts')
            ->all()
            ->filter(fn (Post $post) => $post->author == $author);

    return view('authors.show',[
            'posts' => $posts,
            'authorName' =>  $posts->first()->author_name
        ]);
});
//this is looking for the tags route and will as a result show the app
// filter authors from the url
//'then add this into the code

Route::get('/tags/{tag}', function ($tag) {
    $posts = Sheets::collection('posts')
            ->all()
            ->filter(fn (Post $post) => in_array($tag, $post->tags));

    return view('tags.show',[
            'posts' => $posts,
            'tag' => $tag
        ]);
});
