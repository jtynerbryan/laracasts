<?php

class PagesController
{
    public function home()
    {
        $users = App::get('database')->selectAll('users');

        return view('index', compact('users'));
    }

    public function about()
    {
        $company = 'Laracasts';
        
        return view('about', compact('company'));
    }

    public function contact()
    {
        return view('contact');
    }
}