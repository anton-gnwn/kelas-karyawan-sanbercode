<?php

namespace App\Http\Controllers;

use App\Models\Cast;

use Illuminate\Http\Request;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cast.index',[
            'casts' => Cast::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cast.create');
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
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required',
        ]);

        // Cara 1
        // $cast = new Cast;
 
        // $cast->name = $request->name;
        // $cast->umur = $request->umur;
        // $cast->bio = $request->bio;
 
        // $cast->save();
        // return redirect('/cast');

        // Cara 2
        $cast = $request->all();
        Cast::create($cast);
        return redirect('/cast');
       
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $cast = Cast::find($id);

        return view('cast.edit',[
            'cast' => $cast
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required',
        ]);
        
        $cast = $request->all();
        $item = Cast::find($id);
        $item->update($cast);
        return redirect('/cast');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $item = Cast::find($id);
        $item->delete();
        return redirect('/cast');
    }
}
