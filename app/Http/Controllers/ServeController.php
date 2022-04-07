<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Http\Request;

class ServeController extends Controller
{
    public function index()
    {
        return view('dashboard.serve.index',[
            'services' => service::all()
        ]);
    }
    public function destroy(service $service)
    {
        service::destroy($service->id);

        return redirect ('/dashboard/service')->with('succes', "Berhasil hapus");
    }
}