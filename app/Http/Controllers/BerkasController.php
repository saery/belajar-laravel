<?php

namespace App\Http\Controllers;

use App\Berkas;
use Illuminate\Http\Request;

class BerkasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berkas = Berkas::paginate(5);

        return view('berkas.index', compact('berkas'));

        // berkas adalah nama tabel di database
//        $berkas = DB::table('berkas')->paginate(10)->get();
//        $berkas = DB::table('berkas')->paginate(10);
//        return view('berkas.index', ['berkas' =>$berkas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('berkas.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $berkas = new Berkas;
        $berkas->nomor_berkas = $request->nomor_berkas;
        $berkas->nama_pemohon = $request->nama_pemohon;
        $berkas->badan_usaha = $request->badan_usaha;
        $berkas->jenis_permohonan = $request->jenis_permohonan;
        $berkas->nama_bangunan = $request->nama_bangunan;
        $berkas->alamat_bangunan = $request->alamat_bangunan;

        $berkas->save();

        $request->validate([
            'nomor_berkas' => 'required',
            'nama_pemohon' => 'required',
            'badan_usaha' => 'required',
            'jenis_permohonan' => 'required',
            'nama_bangunan' => 'required',
            'alamat_bangunan' => 'required'
        ]);

        return redirect('/berkas')->with('status', 'Data Berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Berkas $berkas)
    {
        return view('berkas.show', compact('berkas'));
    }

    /**
     * Show the form for editing the specified resource.
     * @return \Illuminate\Http\Response
     */
    public function edit(Berkas $berkas)
    {
        return view('berkas.edit', compact('berkas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berkas $berkas)
    {
        $request->validate([
            'nomor_berkas' => 'size:9',
            'nama_pemohon' => 'required',
            'badan_usaha' => 'required',
            'jenis_permohonan' => 'required',
            'nama_bangunan' => 'required',
            'alamat_bangunan' => 'required'
        ]);

        Berkas::where('id', $berkas->id)
            ->update([
                'nomor_berkas' => $request->nomor_berkas,
                'nama_pemohon' => $request->nama_pemohon,
                'badan_usaha' => $request->badan_usaha,
                'jenis_permohonan' => $request->jenis_permohonan,
                'nama_bangunan' => $request->nama_bangunan,
                'alamat_bangunan' => $request->alamat_bangunan
            ]);


        return redirect('/berkas')->with('status', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berkas $berkas)
    {
        Berkas::destroy($berkas->id);
        return redirect('/berkas')->with('status', 'Data Berhasil Dihapus!');
    }
}
