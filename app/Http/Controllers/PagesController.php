<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

/*cmd: php artisan make:controller PagesController */

class PagesController extends Controller
{
    public function index() {
        $title="Welcome to Laravel!";
//      return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
}

    public function about() {
        $title="Welcome to About Page!";        
        return view('pages.about')->with('title', $title);
    }

    public function service() {
        $data = array(
            'title' => 'Service',
            'services' => ['Web design', 'Programmer', 'SEO']
        );
        return view('pages.service')->with($data);
    } 
}
