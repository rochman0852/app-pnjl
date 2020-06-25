<?php

namespace App\Http\Controllers;

use App\penjualan;
use App\transaksi;
use App\detailTran;
use Illuminate\Http\Request;

class penjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $trans=\App\transaksi::all('id_transaksi','sub_total');
        //  return var_dump(empty($trans[0]));
       
        if(empty($trans[0])){
            $dalem=1;
            transaksi::create([
                'id_transaksi'=> $dalem, 
                ]); 
            $idtransaksi= \App\transaksi::all('id_transaksi')->max('id_transaksi');
            // $alldetailtran= \App\detailTran::where('id_tran','$idtransaksi');
             return view('penjualan.penjualan',['idtransaksi'=>$idtransaksi]);
        }
        
        elseif ($trans[0]->id_transaksi && $trans[0]->sub_total >=1 ) {
            $idtransaksi1= \App\transaksi::all('id_transaksi')->max('id_transaksi');
             transaksi::create([
                'id_transaksi'=> $idtransaksi1+1, 
                ]); 
             $idtransaksi= \App\transaksi::all('id_transaksi')->max();  
              return view('penjualan.penjualan',['idtransaksi'=>$idtransaksi]);
        }
     
        else{
          $idtransaksi= \App\transaksi::all('id_transaksi')->max('id_transaksi');  
             return view('penjualan.penjualan',['idtransaksi'=>$idtransaksi]);
            //  return var_dump($idtransaksi);
        }

     
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function show(penjualan $penjualan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function edit(penjualan $penjualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, penjualan $penjualan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy(penjualan $penjualan)
    {
        //
    }
}
