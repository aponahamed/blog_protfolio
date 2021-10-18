<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\personal;
use App\Models\language;
use App\Models\experience;
use Illuminate\Support\Facades\Auth;
use Image;
use File;

class experienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutExperience()
    {
        $data['title'] = 'Experience Create';
        $id = Auth::user()->id;
        $data['personalView'] = personal::where('id','=',$id)->first();
        $data['experience'] = experience::all();
        return view('backend/about/aboutExperience',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutExperienceInsert(Request $request)
    {
        $experience = new experience;
        $experience->user_id = Auth::user()->id;
        $experience->company_name = $request->input('company_name');
        $experience->designition = $request->input('designition');
        $experience->form_date = $request->input('form_date');
        $experience->to_date = $request->input('to_date');
        $experience->duration = $request->input('duration');
        $experience->description = $request->input('description');
       
        if($request->hasfile('aboutExperienceImage')){
            $file = $request->file('aboutExperienceImage');
            $filename = time() . '.'. $file->getClientOriginalExtension();
            $file->move('gallery/', $filename);
            $experience->aboutExperienceImage = $filename;
        }
        $experience->save();
        
        return redirect()->back()->with('status','Experience Insert Successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function aboutExperienceView($id)
    {
        $user_id = Auth::user()->id;
        $data['title'] = 'Experience Update';
        $data['personalView'] = personal::where('id','=',$user_id)->firstOrFail();
        $data['experience'] = experience::where('id','=',$id)->firstOrFail();
        return view('backend/about/aboutExperienceView',$data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function aboutExperienceUpdate(Request $request,$id)
    {
        $experience = experience::where('id', '=', $id)->firstOrFail();
        $experience->user_id = Auth::user()->id;
        $experience->company_name = $request->input('company_name');
        $experience->designition = $request->input('designition');
        $experience->form_date = $request->input('form_date');
        $experience->to_date = $request->input('to_date');
        $experience->duration = $request->input('duration');
        $experience->description = $request->input('description');

       
        if($request->hasfile('aboutExperienceImage')){
            $destinition = "gallery/".$experience->aboutExperienceImage;
            if(File::exists($destinition))
            {
                File::delete($destinition);
            }
            $file = $request->file('aboutExperienceImage');
            $filename = time() . '.'. $file->getClientOriginalExtension();
            $file->move('gallery/', $filename);
            $experience->aboutExperienceImage = $filename;
        }
        $experience->update();
        
        return redirect()->back()->with('status','Experience Updated Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function aboutExperienceDelete($id)
    {
        $delete = experience::where('id', '=', $id)->firstOrFail();
        $desPath = "gallery/".$delete->aboutExperienceImage;
        if(File::exists($desPath)){
            File::delete($desPath);
        }
        $delete->delete();
        return redirect()->back()->with('delete','Experience Deleted Successfully');
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
