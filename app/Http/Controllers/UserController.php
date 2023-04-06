<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('apotek.user.user-mgmt')->with('user', $user);
        // return $user;
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
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'level' => 'required',
            'aktif' => 'required'
        ], [
            'name.required' => 'Nama Wajib Di Isi',
            'email.required' => 'Email Wajib Di Isi',
            'email.email' => 'Masukan Email yang valid',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password Wajib Di Isi',
            'password.min' => 'Minimum password 6 karakter',
            'level.required' => 'level Wajib Di Isi',
            'aktif.required' => 'aktif Wajib Di Isi',
        ]);

        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'level' => $request->input('level'),
            'aktif' => $request->input('aktif')
        ];

        User::create($data);
        return redirect("user")->with('success', "User " . $request->input('name') . " berhasil ditambahkan");
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
        //
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
            'name' => 'required',
            'email' => 'required|email',
            'level' => 'required',
            'aktif' => 'required'
        ], [
            'name.required' => 'Nama Wajib Di Isi',
            'email.required' => 'Email Wajib Di Isi',
            'email.email' => 'Masukan Email yang valid',
            'level.required' => 'level Wajib Di Isi',
            'aktif.required' => 'aktif Wajib Di Isi',
        ]);

        if ($request->hasFile('password')) {
            $request->validate([
                'password' => 'min:6'
            ], [
                'password.min' => 'Minimum password 6 karakter'
            ]);

            $password = Hash::make($request->input('password'));
        }
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $password,
            'level' => $request->input('level'),
            'aktif' => $request->input('aktif')
        ];

        User::where('id', $id)->update($data);
        return redirect("obat")->with('success', "Data berhasil diubah");

        // $nama = User::where('name', $id);
        // return $nama;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect("user")->with('success', "Data berhasil dihapus");
    }
}
