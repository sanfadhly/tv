<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chanel;
use App\Models\Category;

class ChanelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        /** */
        $chanels = Chanel::all();
        return view('chanel.index')->with(compact('chanels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        $categories = Category::all();
        return view('chanel.create')->with(compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([             
            'category' => 'required',
            'description' => 'required',
            'img' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $img = time().$request->img->getClientOriginalName();
        $save=$request->img->move(public_path('foto'), $img);
        
        Chanel::create($request->all());
 
        return redirect()->route('chanel.index')
                        ->with('success','Chanel created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Chanel $chanel)
    {
        return view('chanel.show',compact('chanel'));
    }    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Chanel $chanel)
    {
        return view('chanel.edit',compact('chanel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chanel $chanel)
    {
        $request->validate([             
            'id_category' => 'required',
            'description' => 'required',
            'chanel' => 'required',            
            'img' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]); 
        $chanel = Chanel::findOrFail($chanel->id);
        if($request->file('image') == "") {
    
            $chanel->update([
                
                'description' => $request->description,
                'id_category' => $request->id_category,
                'chanel' => $request->chanel
            ]);
    
        } else {
    
            //upload new image
            $img = time().$request->foto->getClientOriginalName();
            $save=$request->img->move(public_path('foto'), $img);   
    
            $chanel->update([                
                'description' => $request->description,
                'id_category' => $request->id_category,
                'chanel' => $request->chanel,
                'img' =>  $img
            ]);
    
        }
 
        return view('chanel.edit', compact('chanel'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chanel $chanel)
    {
        $chanel->delete();
 
        return redirect()->route('chanel.index')
                        ->with('success','chanel deleted successfully');
    }
}
