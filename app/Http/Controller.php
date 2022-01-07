<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pages;
use Session;

class Controller extends Controller
{
  
    public function setLang($locale)
    {
        $langs = ['tr','en'];
        if(in_array($locale,$langs)){
            Session::put('lang',$locale);
        }
        return redirect()->back();
    }
  
    public function openPage()
    {
        $page = Pages::where('slug',$slug)->first();        
        return view('site.showPage',compact('page'));
    }
  
}
        
        
  
