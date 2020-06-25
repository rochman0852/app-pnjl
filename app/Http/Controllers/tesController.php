<?php

namespace App\Http\Controllers;

use App\detailTran;
use App\transaksi;
use App\product;
use Illuminate\Http\Request;

class tesController extends Controller
{
    
    public function index()
    {
        //
        $a=detailTran::all()->max('id_tran');
        $semua=detailTran::where('id_tran', $a)->get();
          //return dump($a);
         return view('tes',['semua'=>$semua]);
    }
}
