<?php

namespace App\Controllers;
use App\Core\App;

class UsersController {


    public function index(){

        $users = App::get('database')->selectAll('users');
        // var_dump($users);
        return view('users', compact('users'));
    }


    public function store() {

        //  insert the user associated with the request

        //  redirect back to all user

        App::get('database')->insert('users', [
            'name'=> $_POST['name']
        ]);
        
        
        # redirect
        return redirect('users');
    }
}