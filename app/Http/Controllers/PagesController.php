<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = "welcomme to my blog";
        return view('pages.index', compact('title'));
    }
    public function about()
    {
        $title = "welcomme to about";
        return view('pages.about')->with('title', $title);
    }
    public function services()
    {
        $data = array(
            'title' => 'Services',
            'services' => [
                'web design',
                'programming',
                'seo'
            ]
        );
        return view('pages.services')->with($data);
    }
}
