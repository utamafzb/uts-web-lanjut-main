<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
	
	public function about_me(): string
    {
        return view('aboutme');
    }
	
	public function education(): string
    {
        return view('education');
    }
	
	
	
}
