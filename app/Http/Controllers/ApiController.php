<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
   public function indexAction()
   {
   		return view('index');
   }

   public function RegistrationAction()
   {
   		return view('Registration');
   }

   public function aboutAction()
   {
   		return view('about');
   }

   public function unnamedpageAction()
   {
   		return view('unnamedpage');
   }

}
