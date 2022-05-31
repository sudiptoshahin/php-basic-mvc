<?php

namespace App\Controllers;
use App\Core\App;

class PagesController {

    public function home() {

        // receive the request
        // delegate
        // return the response

        $tasks = App::get('database')->selectAll('todo');

        // return view('index', ['tasks' => $tasks]);
        return view('index', compact('tasks'));
    }


    public function about() {

        return view('about');
    }


    public function contact() {

        return view('contact');
    }
}