<?php

namespace App\Http\Controllers;

use App\Permohonan;
use Illuminate\Http\Request;

class PermohonansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permohonans = Permohonan::paginate(5);

        return view('permohonans.index', compact('permohonans'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permohonans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $permohonan = new Permohonan;
        $permohonan->nomor_berkas = $request->nomor_berkas;
        $permohonan->nama_pemohon = $request->nama_pemohon;
        $permohonan->badan_usaha = $request->badan_usaha;
        $permohonan->permohonan = $request->permohonan;
        $permohonan->nama_bangunan = $request->nama_bangunan;
        $permohonan->alamat_bangunan = $request->alamat_bangunan;

        $permohonan->save();

//        Permohonan::create([
//            'nomor_berkas'=>$request->nomor_berkas,
//            'nama_pemohon'=>$request->nama_pemohon,
//            'badan_usaha'=>$request->badan_usaha,
//            'permohonan'=>$request->permohonan,
//            'nama_bangunan'=>$request->nama_bangunan,
//            'alamat_bangunan'=>$request->alamat_bangunan
//        ]);
        $request->validate([
            'nama_pemohon' => 'required',
            'nomor_berkas' => 'size:9',
            'badan_usaha' => 'required',
            'permohonan' => 'required',
            'nama_bangunan' => 'required',
            'alamat_bangunan' => 'required'
        ]);

//        Permohonan::created($request->all());
//        return redirect('/permohonans')->with('status', 'Data Permohonan berhasil ditambahkan!');
        return redirect('/permohonans')->with('status', 'Data Berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Permohonan  $permohonan
     * @return \Illuminate\Http\Response
     */
    public function show(Permohonan $permohonan)
    {
        return view('permohonans.show', compact('permohonan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Permohonan  $permohonan
     * @return \Illuminate\Http\Response
     */
    public function edit(Permohonan $permohonan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Permohonan  $permohonan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permohonan $permohonan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Permohonan  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permohonan $permohonan)
    {
        Permohonan::destroy($permohonan->id);
        return redirect('/permohonans')->with('status', 'Data Berhasil Dihapus!');
    }
}
