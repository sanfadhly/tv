<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chanel;

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
        return view('chanel.create');
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
            'link' => 'required',
            'kategori' => 'required',
            'chanel' => 'required',
            'foto' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $foto = time().$request->foto->getClientOriginalName();

        $save=$request->foto->move(public_path('foto'), $foto);

        Chanel::create($request->all());
        // $chanel = new Chanel();
        // $chanel->foto = $foto;
        // $chanel->chanel = $request->chanel;
        // $chanel->link = $request->link;
        // $chanel->kategori = $request->kategori;
        // $chanel->save();
        // dd($chanel);
 
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
            'id' => 'required',
            'link' => 'required',
        ]);
 
        $chanel->update($request->all());
 
        return redirect()->route('chanel.index')
                        ->with('success','chanel updated successfully');
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
