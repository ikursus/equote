<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // Dapatkan rekod semua produk dari table products
        $senarai_produk = Product::all();

        return view('products/template_products_list', compact('senarai_produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products/template_products_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // Validate data yang dikirim daripada Borang
      $request->validate([
        'nama' => 'required|min:3',
        'kos' => 'required|numeric',
        'margin' => 'required|numeric',
        'active' => 'required|in:1,2'
      ]);

      // Dapatkan semua rekod daripada borang
      $data = $request->all();

      // Simpan rekod ke dalam database
      Product::create($data);

      // Bagi response kembali ke halaman senarai produk beserta session mesej berjaya
      return redirect('/produk')->with('alert-success', 'Rekod berjaya ditambah!');
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
      // Dapatkan rekod produk berdasarkan ID produk
      $product = Product::find($id);

      // Paparkan rekod product yang terpilih pada borang edit product
      return view('products/template_products_edit', compact('product'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
