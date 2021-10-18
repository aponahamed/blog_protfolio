<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\personal;
use App\Models\language;
use App\Models\certification;
use Illuminate\Support\Facades\Auth;
use Image;
use File;


class certificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutCertification()
    {
        $data['title'] = 'Certification Create';
        $id = Auth::user()->id;
        $data['personalView'] = personal::where('id','=',$id)->first();
        $data['certification'] = certification::all();
        return view('backend/about/aboutCertification',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutCertificationInsert(Request $request)
    {
        $certification = new certification;
        $certification->user_id = Auth::user()->id;
        $certification->institute_title = $request->input('institute_title');
        $certification->subject_name = $request->input('subject_name');
        $certification->duration = $request->input('duration');
        $certification->from_date = $request->input('from_date');
        $certification->to_date = $request->input('to_date');
        $certification->description = $request->input('description');
       
        if($request->hasfile('aboutCertificationImage')){
            $file = $request->file('aboutCertificationImage');
            $filename = time() . '.'. $file->getClientOriginalExtension();
            $file->move('gallery/', $filename);
            $certification->aboutCertificationImage = $filename;
        }
        $certification->save();
        
        return redirect()->back()->with('status','Certificate Insert Successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function aboutCertificationView($id)
    {
        $user_id = Auth::user()->id;
        $data['title'] = 'Certification Update';
        $data['personalView'] = personal::where('id','=',$user_id)->firstOrFail();
        $data['certification'] = certification::where('id','=',$id)->firstOrFail();
        return view('backend/about/aboutCertificationView',$data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function aboutCertificationUpdate(Request $request,$id)
    {
        $certification = certification::where('id', '=', $id)->firstOrFail();
        $certification->user_id = Auth::user()->id;
        $certification->institute_title = $request->input('institute_title');
        $certification->subject_name = $request->input('subject_name');
        $certification->duration = $request->input('duration');
        $certification->from_date = $request->input('from_date');
        $certification->to_date = $request->input('to_date');
        $certification->description = $request->input('description');

       
        if($request->hasfile('aboutCertificationImage')){
            $destinition = "gallery/".$certification->aboutCertificationImage;
            if(File::exists($destinition))
            {
                File::delete($destinition);
            }
            $file = $request->file('aboutCertificationImage');
            $filename = time() . '.'. $file->getClientOriginalExtension();
            $file->move('gallery/', $filename);
            $certification->aboutCertificationImage = $filename;
        }
        $certification->update();
        
        return redirect()->back()->with('status','Certification Updated Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function aboutCertificationDelete($id)
    {
        $delete = certification::where('id', '=', $id)->firstOrFail();
        $desPath = "gallery/".$delete->aboutCertificationImage;
        if(File::exists($desPath)){
            File::delete($desPath);
        }
        $delete->delete();
        return redirect()->back()->with('delete','Certification Deleted Successfully');
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
