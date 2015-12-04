<?php namespace App\Http\Controllers;

class HomeController extends Controller {

	public function index(){
		return view('home.home');
	}

	public function new_in() {
        return view('home.new_in');
	}

    public function woman(){
        return view('home.women');
    }

    public function member(){
        return view('home.member');
    }

}
