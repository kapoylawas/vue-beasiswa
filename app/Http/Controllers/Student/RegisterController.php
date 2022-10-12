<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Kecamatan;
use App\Models\Student;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $register = 'testing';
           
        return inertia('Student/Register/Index', [
            'lessons' => $register,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kecamatans = Kecamatan::all();
        // dd($kecamatans);
        return inertia('Student/Register/Create', [
            'kecamatans' => $kecamatans
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate request
        $request->validate([
            'name'          => 'required|string|max:255',
            'nik'          => 'required|unique:students|max:16',
            'gender'        => 'required|string',
            'password'      => 'required|confirmed',
            'kecamatan_id'  => 'required',
            'alamat'  => 'required',
            'email'  => 'required',
        ], [
            'nik.max' => 'nik harus 16 angka',
            'nik.required' => 'nik tidak boleh kosong',
            'nik.unique' => 'nik sudah terdaftar',
            'name.required' => 'nama tidak boleh kosong',
            'gender.required' => 'gender tidak boleh kosong',
            'password.required' => 'password tidak boleh kosong',
            'kecamatan_id.required' => 'Kecamatan tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
        ]);

        //create student
        Student::create([
            'name'          => $request->name,
            'nik'          => $request->nik,
            'gender'        => $request->gender,
            'password'      => $request->password,
            'kecamatan_id'      => $request->kecamatan_id,
            'alamat'      => $request->alamat,
            'email'      => $request->email,
        ]);

        //redirect
        return redirect()->route('student.register.index');
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
        //
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
