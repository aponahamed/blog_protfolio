<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\personal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;
use File;

class personalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function seetingsPersonal(Request $request, $user_id)
    {
       
        $personal = personal::where('user_id', '=', $user_id)->firstOrFail();
        $personal->user_id = $personal->user_id;
        $personal->first_name = $request->input('first_name');
        $personal->middle_name = $request->input('middle_name');
        $personal->last_name = $request->input('last_name');
        $personal->phone = $request->input('phone');
        $personal->email = $request->input('email');
        $personal->Designition = $request->input('Designition');
        $personal->fathers_name = $request->input('fathers_name');
        $personal->mothers_name = $request->input('mothers_name');
        $personal->date_of_birth = $request->input('date_of_birth');
        $personal->maritial_status = $request->input('maritial_status');
        $personal->nationality = $request->input('nationality');
        $personal->national_id_no = $request->input('national_id_no');
        $personal->pasport_no = $request->input('pasport_no');
        $personal->driving_licence = $request->input('driving_licence');
        $personal->religion = $request->input('religion');
        $personal->present_address = $request->input('present_address');
        $personal->permanent_address = $request->input('permanent_address');
        $personal->tagline = $request->input('tagline');
        if($request->hasfile('personal_image')){
            $destinition = "gallery/".$personal->personal_image;
            if(File::exists($destinition))
            {
                File::delete($destinition);
            }
            $file = $request->file('personal_image');
            $filename = time() . '.'. $file->getClientOriginalExtension();
            $file->move('gallery/', $filename);
            $personal->personal_image = $filename;
        }
        $personal->update();
        
        return redirect()->back()->with('status','Personal Information Updated Successfully');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function personalView()
    {   $id = Auth::user()->id;
        $data['personalView'] = personal::where('id','=',$id)->first();
        $data['title'] = 'Personal Information update';
        return view('backend.personal.personalView',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\r  $r
     * @return \Illuminate\Http\Response
     */
    public function show(r $r)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\r  $r
     * @return \Illuminate\Http\Response
     */
    public function edit(r $r)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\r  $r
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, r $r)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\r  $r
     * @return \Illuminate\Http\Response
     */
    public function destroy(r $r)
    {
        //
    }
}
