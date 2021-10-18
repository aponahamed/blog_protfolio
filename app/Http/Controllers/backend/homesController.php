<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\personal;
use App\Models\homeView;
use App\Models\homeSkills;
use App\Models\homeWorks;
use Illuminate\Support\Facades\Auth;
use Image;
use File;

class homesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminHome()
    {
        $id = Auth::user()->id;
        $data['personalView'] = personal::where('id','=',$id)->first();
        $data['homeView'] = homeView::where('id','=',$id)->first();
        $data['title'] = 'Home Update';
        return view('backend/home',$data);
    }

    public function hideShow(Request $request,$status){
        // dd($status);die();
        $user_id = Auth::user()->id;
        $homeView = homeView::where('user_id', '=', $user_id)->firstOrFail();
        if($status=='banner_status'){
            if($homeView->banner_status=='1'){
                $homeView->banner_status = '0';
                $homeView->update();
                return redirect()->back()->with('status','Successfully Hide Your Baner Section');
            }else{
                $homeView->banner_status = '1';
                $homeView->update();
                return redirect()->back()->with('status','Successfully Show Your Baner Section');
            }
        }elseif($status=='motivation_status'){
            if($homeView->motivation_status=='1'){
                $homeView->motivation_status = '0';
                $homeView->update();
                return redirect()->back()->with('status','Successfully Hide Your Motivation Section');
            }else{
                $homeView->motivation_status = '1';
                $homeView->update();
                return redirect()->back()->with('status','Successfully Show Your Motivation Section');
            }
        }elseif($status=='skill_status'){
            if($homeView->skill_status=='1'){
                $homeView->skill_status = '0';
                $homeView->update();
                return redirect()->back()->with('status','Successfully Hide Your Skills Section');
            }else{
                $homeView->skill_status = '1';
                $homeView->update();
                return redirect()->back()->with('status','Successfully Show Your Skills Section');
            }
        }elseif($status=='works_status'){
            if($homeView->works_status=='1'){
                $homeView->works_status = '0';
                $homeView->update();
                return redirect()->back()->with('status','Successfully Hide Your Works Shocase Section');
            }else{
                $homeView->works_status = '1';
                $homeView->update();
                return redirect()->back()->with('status','Successfully Show Your Works Shocase Section');
            }
        }else{
            return redirect()->back()->with('status','Data Not Found');
        }

        
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function homeBanner()
    {
        $id = Auth::user()->id;
        $data['personalView'] = personal::where('id','=',$id)->first();
        $data['homeBanner'] = homeView::where('id','=',$id)->first();
        $data['title'] = 'Update Your Home Baner Section';
        return view('backend/homes/homeBanner',$data);
    }

    public function homeMotivation()
    {
        $id = Auth::user()->id;
        $data['personalView'] = personal::where('id','=',$id)->first();
        $data['homeMotivation'] = homeView::where('id','=',$id)->first();
        $data['title'] = 'Update Your Home Baner Section';
        return view('backend/homes/homeMotivation',$data);
    }
    public function homeSkill()
    {
        $id = Auth::user()->id;
        $data['personalView'] = personal::where('id','=',$id)->first();
        $data['homeSkills'] = homeSkills::all();
        $data['title'] = 'Update Home Skill';
        return view('backend/homes/homeSkill',$data);
    }
    public function homeSkillView($id)
    {
        $id_user = Auth::user()->id;
        $data['personalView'] = personal::where('id','=',$id_user)->first();
        $data['homeSkills'] = homeSkills::where('id','=',$id)->first();
        $data['title'] = 'Update Home Skill';
        return view('backend/homes/homeSkillView',$data);
    }
    public function homeWorks()
    {
        $id = Auth::user()->id;
        $data['personalView'] = personal::where('id','=',$id)->first();
        $data['homeWorks'] = homeWorks::all();
        $data['title'] = 'Update Works Shocase';
        return view('backend/homes/homeWorks',$data);
    }

    public function homeWorksView($id)
    {
        $id_user = Auth::user()->id;
        $data['personalView'] = personal::where('id','=',$id_user)->first();
        $data['homeWorks'] = homeWorks::where('id','=',$id)->first();
        $data['title'] = 'Update Home Skill';
        return view('backend/homes/homeWorksView',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function homeBannerUpdate(Request $request, $user_id)
    {
        $homeView = homeSkills::where('user_id', '=', $user_id)->firstOrFail();
        $homeView->user_id = $homeView->user_id;
        $homeView->banner_title_1st = $request->input('banner_title_1st');
        $homeView->banner_title_2nd = $request->input('banner_title_2nd');
        $homeView->banner_description = $request->input('banner_description');
       
        if($request->hasfile('homeBannerImage')){
            $destinition = "gallery/".$homeView->homeBannerImage;
            if(File::exists($destinition))
            {
                File::delete($destinition);
            }
            $file = $request->file('homeBannerImage');
            $filename = time() . '.'. $file->getClientOriginalExtension();
            $file->move('gallery/', $filename);
            $homeView->homeBannerImage = $filename;
        }
        $homeView->update();
        
        return redirect()->back()->with('status','Home Banner Updated Successfully');
    }


    public function motivationUpdate(Request $request, $user_id)
    {
        $homeView = homeView::where('user_id', '=', $user_id)->firstOrFail();
        $homeView->user_id = $homeView->user_id;
        $homeView->motivation_title = $request->input('motivation_title');
        $homeView->motivation_description = $request->input('motivation_description');
    
        $homeView->update();
        
        return redirect()->back()->with('status','Motivation Updated Successfully');
    }

    public function homeSkillInsert(Request $request)
    {
        $homeSkills = new homeSkills;
        $homeSkills->user_id = Auth::user()->id;
        $homeSkills->skill_title = $request->input('skill_title');
        $homeSkills->skill_percentage = $request->input('skill_percentage');
       
        if($request->hasfile('homeSkillImage')){
            $file = $request->file('homeSkillImage');
            $filename = time() . '.'. $file->getClientOriginalExtension();
            $file->move('gallery/', $filename);
            $homeSkills->homeSkillImage = $filename;
        }
        $homeSkills->save();
        
        return redirect()->back()->with('status','Skill Insert Successfully');
    }

    public function skillUpdate(Request $request, $id)
    {
        $homeSkills = homeSkills::where('id', '=', $id)->firstOrFail();
        $homeSkills->user_id = Auth::user()->id;
        $homeSkills->skill_title = $request->input('skill_title');
        $homeSkills->skill_percentage = $request->input('skill_percentage');
       
        if($request->hasfile('homeSkillImage')){
            $destinition = "gallery/".$homeSkills->homeSkillImage;
            if(File::exists($destinition))
            {
                File::delete($destinition);
            }
            $file = $request->file('homeSkillImage');
            $filename = time() . '.'. $file->getClientOriginalExtension();
            $file->move('gallery/', $filename);
            $homeSkills->homeSkillImage = $filename;
        }
        $homeSkills->update();
        
        return redirect()->back()->with('status','Skill Updated Successfully');
    }




    public function homeWorksInsert(Request $request)
    {
        $homeWorks = new homeWorks;
        $homeWorks->user_id = Auth::user()->id;
        $homeWorks->works_title = $request->input('works_title');
        $homeWorks->works_sub_title = $request->input('works_sub_title');
        $homeWorks->works_rattings = $request->input('works_rattings');
       
        if($request->hasfile('homeWorksImage')){
            $file = $request->file('homeWorksImage');
            $filename = time() . '.'. $file->getClientOriginalExtension();
            $file->move('gallery/', $filename);
            $homeWorks->homeWorksImage = $filename;
        }
        $homeWorks->save();
        
        return redirect()->back()->with('status','Work Shocase Insert Successfully');
    }

    public function homeworksUpdate(Request $request, $id)
    {
        $homeWorks = homeWorks::where('id', '=', $id)->firstOrFail();
        $homeWorks->user_id = Auth::user()->id;
        $homeWorks->works_title = $request->input('works_title');
        $homeWorks->works_sub_title = $request->input('works_sub_title');
        $homeWorks->works_rattings = $request->input('works_rattings');

       
        if($request->hasfile('homeWorksImage')){
            $destinition = "gallery/".$homeWorks->homeWorksImage;
            if(File::exists($destinition))
            {
                File::delete($destinition);
            }
            $file = $request->file('homeWorksImage');
            $filename = time() . '.'. $file->getClientOriginalExtension();
            $file->move('gallery/', $filename);
            $homeWorks->homeWorksImage = $filename;
        }
        $homeWorks->update();
        
        return redirect()->back()->with('status','Works Shocase Updated Successfully');
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
    public function homeSkillDelete($id)
    {
        $delete = homeSkills::where('id', '=', $id)->firstOrFail();
        $desPath = "gallery/".$delete->homeSkillImage;
        if(File::exists($desPath)){
            File::delete($desPath);
        }
        $delete->delete();
        return redirect()->back()->with('delete','Skill Deleted Successfully');
    }

    public function homeWorksDelete($id)
    {
        $delete = homeWorks::where('id', '=', $id)->firstOrFail();
        $desPath = "gallery/".$delete->homeWorksImage;
        if(File::exists($desPath)){
            File::delete($desPath);
        }
        $delete->delete();
        return redirect()->back()->with('delete','Works Deleted Successfully');
    }

}
