<?php

namespace App\Http\Controllers;

use App\detailTran;
use Illuminate\Http\Request;

class detailTranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // $request->validate([
        //     'id'=>'required',
        //     'quantity'=>'required',
        //     'id_tran'=>'required',
        //     'total'=>'required',
            
        // ]);

        detailTran::create([
            'id_barang'=> $request->id, 
            'quantity'=>$request->quantity,
            'id_tran' => $request->id_tran,
            'total' => $request->total,
            ]);     

           
        return $request;
        //  return ($errors->any());
        // return response()->json(
        //     [
        //         'success' => true,
        //         'message' => 'Data inserted successfully'
        //     ]
        // );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\detailTran  $detailTran
     * @return \Illuminate\Http\Response
     */
    public function show(detailTran $detailTran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\detailTran  $detailTran
     * @return \Illuminate\Http\Response
     */
    public function edit(detailTran $detailTran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\detailTran  $detailTran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detailTran $detailTran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\detailTran  $detailTran
     * @return \Illuminate\Http\Response
     */
    public function destroy(detailTran $detailTran)
    {
        //
    }
}
