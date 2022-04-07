<?php

namespace App\Http\Controllers;

use App\Models\dashboardservice;
use App\Models\detail_pemesanan;
use App\Models\service;
use App\Models\User;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class DashboardServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.dashboardservice.index',[
            'services' => service::all()
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.dashboardservice.index',[
            'services' => service::all()
        ]);
        $user_id=User::all();

        
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
            'id_layanan'=>'required',
            'jumlah'=>'required',
        ]);

        $validatedData = array_merge($validatedData, [
            'user_id' => Auth::id(),
            'id_customer' => Auth::id(),
        ]);

        detail_pemesanan::create($validatedData);

        return redirect ('/dashboard/dashboardservice')->with('succes', "Berhasil order barang");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dashboardservice  $dashboardservice
     * @return \Illuminate\Http\Response
     */
    public function show(dashboardservice $dashboardservice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dashboardservice  $dashboardservice
     * @return \Illuminate\Http\Response
     */
    public function edit(dashboardservice $dashboardservice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dashboardservice  $dashboardservice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dashboardservice $dashboardservice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dashboardservice  $dashboardservice
     * @return \Illuminate\Http\Response
     */
    public function destroy(dashboardservice $dashboardservice)
    {
        //
    }
}