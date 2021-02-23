<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{

    /**
     * Show index page
     *
     * @return view
     */
    public function index()
    {

        $title = "Blog";

        return view('welcome', compact('title'));

    }
    /**
     * Show about page
     *
     * @return view
     */
    public function about()
    {
        return view('about', ['name' => "Tailor"]);
    }
    /**
     * Show admin page
     *
     * @return view
     */
    public function admin()
    {
        return view('admin', ['name' => "Fabio"]);
    }
    /**
     * Show Posts
     *
     * @return view
     */
    public function posts_api()
    {
        return view('spa.posts');
    }


}
