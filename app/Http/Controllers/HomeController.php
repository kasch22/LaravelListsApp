<?php

namespace Lists\Http\Controllers;

use Lists\Http\Requests;
use Illuminate\Http\Request;
use Lists\User as user;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$id = Auth::user()->id;
        //dd($id);
        return view('home');

       //return redirect()->route('list.index');
            
    }
}
