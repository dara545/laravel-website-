<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
        public function index(){
            // $title= 'Welkom op Laravel';
            // return view('pages.index', compact('title'));
            return view('pages.index');
        }
    
        public function about(){
        // $title= 'Over ons';
        return view('pages.about');
      }
    
    
    public function services(){
  
    
      
        return view('pages.services');
      }
    
    
}
