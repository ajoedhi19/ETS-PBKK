<?php

namespace App\Http\Controllers;

use App\Models\dashboardbarang;
use App\Models\detail_pemesanan;
use App\Models\produk;
use App\Models\User;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.dashboardbarang.index',[
            'produks' => produk::all()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.dashboardbarang.index',[
            'produks' => produk::all()
        ]);
        $user_id=User::all();
        return view('dashboard.dashboardbarang.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'tgl_pesan'=> 'required',
            'id_produk'=>'required',
            'jumlah'=>'required',
        ]);

        $validatedData = array_merge($validatedData, [
            'user_id' => Auth::id(),
            'id_customer' => Auth::id(),
        ]);

        detail_pemesanan::create($validatedData);

        return redirect ('/dashboard/dashboardbarang')->with('succes', "Berhasil order barang");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dashboardbarang  $dashboardbarang
     * @return \Illuminate\Http\Response
     */
    public function show(dashboardbarang $dashboardbarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dashboardbarang  $dashboardbarang
     * @return \Illuminate\Http\Response
     */
    public function edit(dashboardbarang $dashboardbarang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dashboardbarang  $dashboardbarang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dashboardbarang $dashboardbarang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dashboardbarang  $dashboardbarang
     * @return \Illuminate\Http\Response
     */
    public function destroy(dashboardbarang $dashboardbarang)
    {
        //
    }
}