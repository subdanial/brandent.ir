<?php

namespace App\Http\Controllers;

use App\Post;
use App\Teammate;
use App\Contact;
use App\Work;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function home()
    {
        return view('home');
    }
    public function portfolio()
    {
        $works = Work::all();
        return view('portfolio',compact('works'));
    }

    public function about()
    {
        $teammates = Teammate::all();
        return view('about',compact('teammates'));
    }
    public function blog()
    {
        $posts = Post::all();
        return view('blog',compact('posts'));
    }
    public function contact()
    {
        $contact = Contact::first();
        return view('contact',compact('contact'));
    }
    public function webinar()
    {
        return view('webinar');
    }
    public function consulting()
    {
        return view('consulting');
    }
    public function post()
    {
        return view('post');
    }

}
