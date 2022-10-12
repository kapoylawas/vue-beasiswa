<?php

namespace App\Http\Controllers\Student;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //validate the form data
        $this->validate($request, [
            'nik'      => 'required',
            'password'  => 'required',
        ]);

        //cek nik dan password
        $student = Student::where([
            'nik'      => $request->nik,
            'password'  => $request->password
        ])->first();

        if(!$student) {
            return redirect()->back()->with('error', 'NIK atau Password salah');
        }
        
        //login the user
        auth()->guard('student')->login($student);

        //redirect to dashboard
        return redirect()->route('student.dashboard');
    }
}