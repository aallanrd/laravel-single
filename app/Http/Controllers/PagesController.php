<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {

      	// $tasks = [
      	// 	'Go to the market',
      	// 	'Go to the store',
      	// 	'Go to work'
      	// ];

          return view('welcome',[
          	'foo' => 'bar'
          ]);
    }

    public function about(){
      return view('about');
    }

    public function contact(){
      return view('contact');
    }
}
