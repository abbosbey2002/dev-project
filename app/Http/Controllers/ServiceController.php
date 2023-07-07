<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePortfolioRequest;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdatePortfolioRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $services=Service::all();
        return view('admin.service.index')->with('services',  $services);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServiceRequest $req)
    {
        //
        $path=$req->file('image')->store('serviceimg');

        $newproject=Service::create([
            'name'=>$req->name,
            'description'=>$req->description,
            'image'=>$path ?? 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/1024px-No_image_available.svg.png',
            'short_descr'=>$req->short_descr
        ]);

        return redirect()->route('service.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //

        return view('admin.service.show')->with('service', $service);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //

        return view('admin.service.edit')->with('service', $service);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServiceRequest  $request
     * @param  \App\Models\Service  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServiceRequest $req, Service $service)
    {
        //is there image have?

        if($req->hasFile('image')){
            // dd($req->image);
            if(isset($service->image)){
                Storage::delete($service->image);
            }
            $path=$req->file('image')->store('serviceimg');

        }


        $service->update([
            'name' => $req->name,
            'description' => $req->description,
            'image' => $path ?? $service->image,
            'short_descr' => $req->short_descr
        ]);
        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //

        $service->delete();

        Storage::delete($service->image);

        return redirect()->route('service.index');

    }
}
