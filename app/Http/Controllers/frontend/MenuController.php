<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function about()
    {
        //
        
        return view('frontend.about');
        
    }
    public function service()
    {
        //
        
        return view('frontend.service');
        
    }
    public function feature()
    {
        //
        
        return view('frontend.feature');
        
    }
    public function quote()
    {
        //
        
        return view('frontend.quote');
        
    }
    public function team()
    {
        //
        
        return view('frontend.team');
        
    }
    public function testomonial()
    {
        //
        
        return view('frontend.testomonial');
        
    }
    public function contact()
    {
        //
        
        return view('frontend.contact');
        
    }
}
