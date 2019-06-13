<?php

namespace App\Http\Controllers;
 
class HomeController extends Controller {

    /**
     * Show the application home page.
     *
     * @return \Illuminate\View\View
     */
    public function index() {       
        return view('home.index');
    }
    
    /**
     * Login page.
     *
     * @return \Illuminate\View\View
     */
    public function login() {
        return view('home.login');
    }
}
