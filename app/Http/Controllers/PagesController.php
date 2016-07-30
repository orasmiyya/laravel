<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
    public function home()
    {
    	return view('index');
    }
     public function aboutus()
    {
    	return view('about-us');
    }
     public function blog()
    {
    	return view('blog');
    }
         public function blogdetails()
    {
    	return view('blog-details');
    }
         public function businessplan()
    {
    	return view('business-plan');
    }
         public function consultany()
    {
    	return view('consultany');
    }
         public function contanctus()
    {
    	return view('contanct-us');
    }
         public function financialservice()
    {
    	return view('financial-service');
    }
         public function investment()
    {
    	return view('invenstment');
    }
         public function marketanalysis()
    {
    	return view('market-analysis');
    }
         public function marketing()
    {
    	return view('marketing');
    }
}
