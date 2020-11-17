<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Config;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /** */
        $configs = Config::all();
         $admobenable= Config::where('title','admobenable')->get()->first()->value;
         $admobappid= Config::where('title','admobappid')->get()->first()->value;
         $admobbanner= Config::where('title','admobbanner')->get()->first()->value;
         $admobinter= Config::where('title','admobinter')->get()->first()->value;
         $fanenable= Config::where('title','fanenable')->get()->first()->value;
         $fanappid= Config::where('title','fanappid')->get()->first()->value;
         $fanbanner= Config::where('title','fanbanner')->get()->first()->value;
         $faninter= Config::where('title','faninter')->get()->first()->value;

        return view('config.index')->with(compact(['admobenable','admobappid','admobbanner','admobinter','fanenable','fanappid','fanbanner','faninter']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('config.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (isset($request->admobenable)) {
            $config = Config::where('title','admobenable')
            ->update(['value' => '1']);
        }
        else{
            $config = Config::where('title','admobenable')
            ->update(['value' => '0']);
        }

        $config = Config::where('title','admobappid')
        ->update(['value' => $request->admobappid]);
        $config = Config::where('title','admobbanner')
        ->update(['value' => $request->admobbanner]);
        $config = Config::where('title','admobinter')
        ->update(['value' => $request->admobinter]);

        if (isset($request->fanenable)) {
            $config = Config::where('title','fanenable')
            ->update(['value' => '1']);
        }
        else{
            $config = Config::where('title','fanenable')
            ->update(['value' => '0']);
        }

        $config = Config::where('title','fanappid')
        ->update(['value' => $request->fanappid]);
        $config = Config::where('title','fanbanner')
        ->update(['value' => $request->fanbanner]);
        $config = Config::where('title','faninter')
        ->update(['value' => $request->faninter]);


        return redirect()->route('config.index')
                        ->with('success','Config created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Config $config)
    {
        return view('config.show',compact('config'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Config $config)
    {
        return view('config.edit',compact('config'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Config $config)
    {
        $request->validate([
            'id' => 'required',
            'title' => 'required',
        ]);

        $config->update($request->all());

        return redirect()->route('config.index')
                        ->with('success','config updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Config $config)
    {
        $config->delete();

        return redirect()->route('config.index')
                        ->with('success','config deleted successfully');
    }
}
