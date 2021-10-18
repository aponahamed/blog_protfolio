<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\personal;
use App\Models\language;
use App\Models\Education;
use Illuminate\Support\Facades\Auth;
use Image;
use File;

class educationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutEducation()
    {
        $data['title'] = 'Education Create';
        $id = Auth::user()->id;
        $data['personalView'] = personal::where('id','=',$id)->first();
        $data['education'] = Education::all();
        return view('backend/about/aboutEducation',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutEducationInsert(Request $request)
    {
        $Education = new Education;
        $Education->user_id = Auth::user()->id;
        $Education->university_name = $request->input('university_name');
        $Education->degree_title = $request->input('degree_title');
        $Education->duration = $request->input('duration');
       
        if($request->hasfile('aboutEducationImage')){
            $file = $request->file('aboutEducationImage');
            $filename = time() . '.'. $file->getClientOriginalExtension();
            $file->move('gallery/', $filename);
            $Education->aboutEducationImage = $filename;
        }
        $Education->save();
        
        return redirect()->back()->with('status','Work Shocase Insert Successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function aboutEducationView($id)
    {
        $user_id = Auth::user()->id;
        $data['title'] = 'Education Update';
        $data['personalView'] = personal::where('id','=',$user_id)->firstOrFail();
        $data['education'] = Education::where('id','=',$id)->firstOrFail();
        return view('backend/about/aboutEducationView',$data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function aboutEducationUpdate(Request $request,$id)
    {
        $Education = Education::where('id', '=', $id)->firstOrFail();
        $Education->user_id = Auth::user()->id;
        $Education->university_name = $request->input('university_name');
        $Education->degree_title = $request->input('degree_title');
        $Education->duration = $request->input('duration');

       
        if($request->hasfile('aboutEducationImage')){
            $destinition = "gallery/".$Education->aboutEducationImage;
            if(File::exists($destinition))
            {
                File::delete($destinition);
            }
            $file = $request->file('aboutEducationImage');
            $filename = time() . '.'. $file->getClientOriginalExtension();
            $file->move('gallery/', $filename);
            $Education->aboutEducationImage = $filename;
        }
        $Education->update();
        
        return redirect()->back()->with('status','Education Updated Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function aboutEducationDelete($id)
    {
        $delete = Education::where('id', '=', $id)->firstOrFail();
        $desPath = "gallery/".$delete->aboutEducationImage;
        if(File::exists($desPath)){
            File::delete($desPath);
        }
        $delete->delete();
        return redirect()->back()->with('delete','Education Deleted Successfully');
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
