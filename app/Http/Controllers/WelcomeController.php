<?php
namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
class WelcomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::orderBy('updated_at', 'desc')->paginate(5);
        return view('welcome', [
            'posts' => $posts
        ]);
    }
}