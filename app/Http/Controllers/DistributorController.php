<?php

namespace App\Http\Controllers;

use App\Models\Distributor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DistributorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $distributor = Distributor::all();
        return view('apotek.distributor.distributor')->with('distributor', $distributor);
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
        Session::flash('alamat', $request->alamat);
        Session::flash('notelepon', $request->notelepon);

        $request->validate([
            'name' => 'required',
            'alamat' => 'required',
            'notelepon' => 'required|numeric|min:9',
        ], [
            'name.required' => 'Nama Distributor Wajib Di Isi',
            'alamat.required' => 'Alamat Wajib Di Isi',
            'notelepon.required' => 'No Telepon Wajib Di Isi',
            'notelepon.numeric' => 'No Telpon harus angka',
            'notelepon.min' => 'Minumum No Telpon 9 karakter'

        ]);

        $data = [
            'nama_distributor' => $request->input('name'),
            'alamat' => $request->input('alamat'),
            'notelepon' => $request->input('notelepon'),
        ];

        Distributor::create($data);
        return redirect("distributor")->with('success', "Distributor berhasil ditambahkan");
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
            'alamat' => 'required',
            'notelepon' => 'required|numeric|min:9',
        ], [
            'name.required' => 'Nama Distributor Wajib Di Isi',
            'alamat.required' => 'Alamat Wajib Di Isi',
            'notelepon.required' => 'No Telepon Wajib Di Isi',
            'notelepon.numeric' => 'No Telpon harus angka',
            'notelepon.min' => 'Minumum No Telpon 9 karakter'

        ]);
        $data = [
            'nama_distributor' => $request->input('name'),
            'alamat' => $request->input('alamat'),
            'notelepon' => $request->input('notelepon'),
        ];

        Distributor::where('id', $id)->update($data);
        return redirect("distributor")->with('success', "Data berhasil diubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Distributor::where('id', $id)->delete();
        return redirect("distributor")->with('success', "Data berhasil dihapus");
    }
}
