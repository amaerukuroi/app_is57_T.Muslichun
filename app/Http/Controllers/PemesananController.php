<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
use App\Models\Mobil;
use App\Models\Layanan;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor = 1;
        $pem = Pemesanan::all();
        return view('page.pemesanan.index',compact('pem','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mo = Mobil::all();
        $lay = Layanan::all();
        return view('page.pemesanan.form',compact('lay','mo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pem = new Pemesanan;

        $pem->no_pemesanan = $request->no;
        $pem->mobils_id = $request->mobil;
        $pem->layanans_id = $request->layanan;
        $pem->jadwal = $request->jadwal;

        $pem->save();
        return redirect('/pemesanan');
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
        $mo = Mobil::all();
        $lay = Layanan::all();
        $pem = Pemesanan::find($id);
        return view('page.pemesanan.edit', compact('pem','mo','lay'));
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
        
        $pem = Pemesanan::find($id);
        $pem->no_pemesanan = $request->no;
        $pem->mobils_id = $request->mobil;
        $pem->layanans_id = $request->layanan;
        $pem->jadwal = $request->jadwal;

        $pem->save();
        return redirect('/pemesanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pem = Pemesanan:: find($id);

      
        $pem->delete();

        return redirect('/pemesanan');
    }
}
