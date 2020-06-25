<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product= \App\product::all();  
        $category= \App\category::all(); 
        $product=product::all();
        $allproduct=DB::table('product')
            ->leftJoin('category', 'product.id_cat', '=', 'category.id')
            ->select('product.*','category.nama_cat')
            ->get();

     
         return view('product.product',['allproduct'=>$allproduct,'category'=>$category]);
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
            'category' =>'required',
            'harga'=>'required',
            
        ]);

        product::create([
            'nama'=> $request->nama, 
            'id_cat'=> $request->category, 
            'harga'=>$request->harga,

            ]);
        
            return redirect('/product')->with('status', 'Data Berhasil Ditambah!');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }

    public function delete($id) 
    {
    
    product::where('id', $id)->delete();
    return redirect('/product')->with('status', 'Data Berhasil Dihapus!');
    // return($id);
    }

    
  
}
