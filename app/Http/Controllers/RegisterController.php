<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'born_date' => 'required|date',
            'address' => 'required',
            'gender' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'


        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);

        user::create($validatedData);




        return redirect('/login');
    }
}