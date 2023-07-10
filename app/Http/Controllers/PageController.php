<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Counter;
use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class PageController extends Controller
{

    public function index(){
        $services=Service::all();
        $portfolios=Portfolio::all();
        $counts=Counter::all();

        return view('front.index')->with('projects', $portfolios)->with('services', $services)->with('counters', $counts);
    }
    //
    public function service(){
        $services=Service::all();
        return view('front.service')->with('services', $services);
    }
    public function serviceSingle(Request $req){
        $service=Service::find($req->id);
        return view('front.single-service')->with('service', $service);
    }

    public function projects(){
        $portfolio=Portfolio::all();
        return view('front.projects')->with('projects', $portfolio);
    }

    public function projectsingle(Request $req){
        $portfolio=Portfolio::find($req->id);
        return view('front.projectSingle')->with('project', $portfolio);
    }



    public function contact(){
        $contacts=Contact::all();
        // dd($contacts[0]->adress);
        return view('front.contact')->with('contacts', $contacts);
    }

}
