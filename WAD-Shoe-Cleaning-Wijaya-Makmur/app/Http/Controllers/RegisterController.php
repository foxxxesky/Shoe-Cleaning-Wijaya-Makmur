<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterRequest;
use App\Http\Requests\UpdateRegisterRequest;
use App\Models\Register;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.login&register.register');
    }

    public function login()
    {
        return view('pages.login&register.login');
    }

    public function create()
    {
        //
    }

    public function store(StoreRegisterRequest $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email:dns|unique:registers',
            'no_hp' => 'required',
            'password' => 'required|confirmed',
            'setujukebijakan' => 'accepted'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        Register::create($validatedData);
        return redirect('/Login')->with('success', 'Registrasi Berhasil Silahkan Login');
        // dd('registered');
        // return request()->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function show(Register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit(Register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRegisterRequest  $request
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRegisterRequest $request, Register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy(Register $register)
    {
        //
    }
}