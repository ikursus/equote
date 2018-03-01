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
        'kos' => 'required|numeric',
        'active' => 'required|in:1,2'
      ]);

      // Dapatkan semua rekod daripada borang
      // $data = $request->all();
      // Dapatkan 1 rekod dari field yang diperlukan
      // $data = $request->input('nama');
      // Dapatkan beberapa rekod yang diperlukan
      $data = $request->only('nama', 'username', 'email', 'telefon');
      $data['password'] = bcrypt($request->input('password'));
      // Dapatkan semua rekod kecuali yang dinyatakan
      // $data = $request->except('nama', 'email');
      // Simpan $data ke dalam database
      DB::table('users')->insert($data);
      // Bagi response kembali ke halaman senarai users beserta session mesej berjaya
      return redirect('/users')->with('alert-success', 'Rekod berjaya ditambah!');
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
          return view('products/template_products_edit');
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
