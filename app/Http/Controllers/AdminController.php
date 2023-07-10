<?php

namespace App\Http\Controllers;

use App\Models\Counter;
use App\Models\Partner;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        $counter=Counter::all();
        // dd($counter[0]);
        $partners=Partner::all();

        return view('admin.index')->with('counter', $counter)->with('partners', $partners);
    }
}
