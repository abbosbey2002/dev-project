<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePortfolioRequest;
use App\Http\Requests\UpdatePortfolioRequest;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $portfolios=Portfolio::all();
        return view('admin.portfolio.index')->with('portfolios',  $portfolios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePortfolioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePortfolioRequest $req)
    {
        //
        $path=$req->file('image')->store('productimage');




        $newproject=Portfolio::create([
            'name'=>$req->name,
            'description'=>$req->description,
            'image'=>$path ?? 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/1024px-No_image_available.svg.png',
            'deadline'=>$req->deadline
        ]);

        return redirect()->route('portfolio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //

        return view('admin.portfolio.show')->with('portfolio', $portfolio);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        //

        return view('admin.portfolio.edit')->with('portfolio', $portfolio);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePortfolioRequest  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePortfolioRequest $req, Portfolio $portfolio)
    {
        //is there image have?

        if($req->hasFile('image')){
            // dd($req->image);
            if(isset($portfolio->image)){
                Storage::delete($portfolio->image);
            }
            $path=$req->file('image')->store('productimage');

        }


        $portfolio->update([
            'name' => $req->name,
            'description' => $req->description,
            'image' => $path ?? $portfolio->image,
            'deadline' => $req->deadline
        ]);
        return redirect()->route('portfolio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        //

        $portfolio->delete();

        Storage::delete($portfolio->image);

        return redirect()->route('portfolio.index');

    }
}
