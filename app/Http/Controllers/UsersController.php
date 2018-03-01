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
      // $senarai_users = DB::table('users')->get();
      $senarai_users = DB::table('users')
      ->orderBy('id', 'desc')
      ->paginate(3);

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
        // Dapatkan rekod user berdasarkan ID user
        $user = DB::table('users')
        ->where('id', '=', $id)
        ->first();

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
      // Validate data yang dikirim daripada Borang
      $request->validate([
        'nama' => 'required|min:3',
        'email' => 'required|email',
        'username' => 'required|min:3|alpha_num'
      ]);
      // Dapatkan data yang ingin di update
      $data = $request->only('nama', 'username', 'email', 'telefon');

      // Jika password di isi pada borang, baru update
      if ( !empty( $request->input('password') ) )
      {
        $data['password'] = bcrypt($request->input('password'));
      }

      // Update maklumat ke dalam database
      DB::table('users')
      ->where('id', '=', $id)
      ->update($data);

      // Bagi response kembali ke halaman sebelum beserta session mesej berjaya
      return redirect()->back()->with('alert-success', 'Rekod berjaya dikemaskini!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Dapatkan rekod user berdasarkan ID user
        $user = DB::table('users')
        ->where('id', '=', $id)
        ->delete();

        // Bagi response kembali ke halaman sebelum beserta session mesej berjaya
        return redirect()->back()->with('alert-success', 'Rekod berjaya dihapuskan!');
    }
}
