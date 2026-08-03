<?php

namespace App\Http\Controllers;



class HomeController extends Controller
{
   public function index()
   {
       return view('dashboard.home');
   }
   public function cart()
   {
       return view('cart');
   }
}
