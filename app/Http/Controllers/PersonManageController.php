<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonManageController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('personList');
    }
    
    public function displayAddPage()
    {
        return view('personAdd');
    }

}
