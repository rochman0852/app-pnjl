<?php

namespace App\Http\Controllers;

use App\costumer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class costumerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $costumer= \App\costumer::all();   
        return view('costumers.costumers',['costumer'=>$costumer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama'=>'required',
            'no_hp' =>'required',
            'alamat'=>'required',
            
        ]);

        costumer::create([
            'nama'=> $request->nama, 
            'no_hp'=> $request->no_hp, 
            'alamat'=>$request->alamat,
            'no_id' => Str::random(5),
            ]);
        
            return redirect('/costumer')->with('status', 'Data Berhasil Ditambah!');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\costumer  $costumer
     * @return \Illuminate\Http\Response
     */
    public function show(costumer $costumer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\costumer  $costumer
     * @return \Illuminate\Http\Response
     */
    public function edit(costumer $costumer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\costumer  $costumer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, costumer $costumer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\costumer  $costumer
     * @return \Illuminate\Http\Response
     */
    public function destroy(costumer $costumer)
    {
        //
    }

    public function delete($id) 
    {
    
    costumer::where('id', $id)->delete();
    return redirect('/costumer')->with('status', 'Data Berhasil Dihapus!');
    // return($id);
    }

}
