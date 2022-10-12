<?php

namespace App\Http\Controllers\Student;

use Inertia\Inertia;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Form;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get data saya
        $user = Form::with('student')->where('student_id', auth()->guard('student')->user()->id)->first();
        // dd($user);

        if ($user) {
           $user = $user;
        }else {
           $user = null;
        }

        // if (!$tombolForm) {
        //     $tombolForm = $tombolForm;
        // }else {
        //     $tombolForm = null;
        // }
        
        return inertia('Student/Forms/Index', [
            'user' => $user,
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd(auth()->guard('student')->user()->id);
        return inertia('Student/Forms/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'berkas'         => 'required|mimes:doc,docx,pdf|max:2000',
        ]);

        //upload image
        $image = $request->file('berkas');
        $image->storeAs('public/berkas', $image->hashName());

         //create category
         Form::create([
            'berkas'         => $image->hashName(),
            'student_id'    => auth()->guard('student')->user()->id,
        ]);

        //redirect
        return redirect()->route('student.forms.index');
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
