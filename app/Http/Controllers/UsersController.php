<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // Dapatkan senarai SEMUA users dari table user
      $senarai_users = DB::table('users')->get();

      // Beri response papar template dan senarai users
      return view('users/template_users_list', compact('senarai_users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users/template_users_add');
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
      // $this->validate($request, $array);
      $request->validate([
        'nama' => 'required|min:3',
        'email' => 'required|email',
        'username' => 'required|min:3|alpha_num',
        'password' => 'required|min:5'
      ]);

      // Dapatkan semua rekod daripada borang
      // $data = $request->all();
      // Dapatkan 1 rekod dari field yang diperlukan
      // $data = $request->input('nama');
      // Dapatkan beberapa rekod yang diperlukan
      // $data = $request->only('nama', 'email');
      // Dapatkan semua rekod kecuali yang dinyatakan
      $data = $request->except('nama', 'email');
      // Beri response papar data
      return $data;
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
      // Dapatkan rekod user berdasarkan ID user
        $user = DB::table('users')->where('id', '=', $id)->first();
        // Paparkan rekod user yang terpilih pada borang edit user
        return view('users/template_users_edit', compact('user') );
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
      // Dapatkan semua rekod daripada borang
      $data = $request->all();

      // Beri response papar data
      return $data;
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
