<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obat = Obat::all();
        return view('apotek.obat.obat')->with('obat', $obat);
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
        Session::flash('kode_obat',$request->kode_obat);
        Session::flash('nama_obat', $request->nama_obat);
        Session::flash('merk', $request->merk);
        Session::flash('jenis', $request->jenis);
        Session::flash('satuan', $request->satuan);
        Session::flash('golongan', $request->golongan);
        Session::flash('kemasan', $request->kemasan);
        Session::flash('harga_jual', $request->harga_jual);
        Session::flash('stok', $request->stok);

        $request->validate([
            'kode_obat' => 'required',
            'nama_obat' => 'required',
            'merk' => 'required',
            'jenis' => 'required',
            'satuan' => 'required',
            'harga_jual' => 'required|numeric',
            'stok' => 'required|numeric'
        ], [
            'kode_obat.required' => 'Kode Obat Wajib Di Isi',
            'nama_obat.required' => 'Nama Obat Wajib Di Isi',
            'merk.required' => 'Merk Wajib Di Isi',
            'jenis.required' => 'Jenis Wajib Di Isi',
            'satuan.required' => 'Satuan Wajib Di Isi',
            'harga_jual.required' => 'Harga Wajib Di Isi',
            'stok.required' => 'Stok Wajib Di Isi'
        ]);
        $data = [
            'kode_obat' => $request->input('kode_obat'),
            'nama_obat' => $request->input('nama_obat'),
            'merk' => $request->input('merk'),
            'jenis' => $request->input('jenis'),
            'satuan' => $request->input('satuan'),
            'golongan' => $request->input('golongan'),
            'kemasan' => $request->input('kemasan'),
            'harga_jual' => $request->input('harga_jual'),
            'stok' => $request->input('stok'),
        ];
        Obat::create($data);
        return redirect("obat")->with('success',"Data berhasil ditambahkan");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($data)
    {
        $obat = Obat::where('id', $data)->first();
        return view('apotek.obat.detail-obat')->with('obat', $obat);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($data)
    {
        $obat = Obat::where('id', $data)->first();
        return view('apotek.obat.ubah-obat')->with('obat', $obat);
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
        return 'test';
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
