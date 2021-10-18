<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\personal;
use App\Models\About;
use Illuminate\Support\Facades\Auth;
use Image;
use File;

class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminProfile()
    {
        $id = Auth::user()->id;
        $data['personalView'] = personal::where('id','=',$id)->first();
        $data['aboutBanner'] = About::where('id','=',$id)->first();
        $data['title'] = 'Profile Update';
        return view('backend.profile',$data);
    }

    public function hideShow($status){
        $user_id = Auth::user()->id;
        $aboutView = About::where('user_id', '=', $user_id)->firstOrFail();
        if($status=='about_banner_status'){
            if($aboutView->about_banner_status=='1'){
                $aboutView->about_banner_status = '0';
                $aboutView->update();
                return redirect()->back()->with('status','Successfully Hide Your Baner Section');
            }else{
                $aboutView->about_banner_status = '1';
                $aboutView->update();
                return redirect()->back()->with('status','Successfully Show Your Baner Section');
            }
        }elseif($status == 'about_language_status'){
            if($aboutView->about_language_status=='1'){
                $aboutView->about_language_status = '0';
                $aboutView->update();
                return redirect()->back()->with('status','Successfully Hide Your Language Section');
            }else{
                $aboutView->about_language_status = '1';
                $aboutView->update();
                return redirect()->back()->with('status','Successfully Show Your Language Section');
            }
        }elseif($status == 'about_experience_status'){
            if($aboutView->about_experience_status=='1'){
                $aboutView->about_experience_status = '0';
                $aboutView->update();
                return redirect()->back()->with('status','Successfully Hide Your Experience Section');
            }else{
                $aboutView->about_experience_status = '1';
                $aboutView->update();
                return redirect()->back()->with('status','Successfully Show Your Experience Section');
            }
        }elseif($status == 'about_traning_status'){
            if($aboutView->about_traning_status=='1'){
                $aboutView->about_traning_status = '0';
                $aboutView->update();
                return redirect()->back()->with('status','Successfully Hide Your Training Section');
            }else{
                $aboutView->about_traning_status = '1';
                $aboutView->update();
                return redirect()->back()->with('status','Successfully Show Your Training Section');
            }
        }elseif($status == 'about_education_status'){
            if($aboutView->about_education_status=='1'){
                $aboutView->about_education_status = '0';
                $aboutView->update();
                return redirect()->back()->with('status','Successfully Hide Your Education Section');
            }else{
                $aboutView->about_education_status = '1';
                $aboutView->update();
                return redirect()->back()->with('status','Successfully Show Your Education Section');
            }
        }elseif($status == 'about_objectives_status'){
            if($aboutView->about_objectives_status=='1'){
                $aboutView->about_objectives_status = '0';
                $aboutView->update();
                return redirect()->back()->with('status','Successfully Hide Your Objectives Section');
            }else{
                $aboutView->about_objectives_status = '1';
                $aboutView->update();
                return redirect()->back()->with('status','Successfully Show Your Objectives Section');
            }
        }elseif($status == 'about_expertice_status'){
            if($aboutView->about_expertice_status=='1'){
                $aboutView->about_expertice_status = '0';
                $aboutView->update();
                return redirect()->back()->with('status','Successfully Hide Your Expertice Section');
            }else{
                $aboutView->about_expertice_status = '1';
                $aboutView->update();
                return redirect()->back()->with('status','Successfully Show Your Expertice Section');
            }
        }elseif($status == 'about_links_status'){
            if($aboutView->about_links_status=='1'){
                $aboutView->about_links_status = '0';
                $aboutView->update();
                return redirect()->back()->with('status','Successfully Hide Your Links Section');
            }else{
                $aboutView->about_links_status = '1';
                $aboutView->update();
                return redirect()->back()->with('status','Successfully Show Your Links Section');
            }
        }elseif($status == 'about_personal_status'){
            if($aboutView->about_personal_status=='1'){
                $aboutView->about_personal_status = '0';
                $aboutView->update();
                return redirect()->back()->with('status','Successfully Hide Your Personal Informations Section');
            }else{
                $aboutView->about_personal_status = '1';
                $aboutView->update();
                return redirect()->back()->with('status','Successfully Show Your Personal Informations Section');
            }
        }elseif($status == 'about_declarations_status'){
            if($aboutView->about_declarations_status=='1'){
                $aboutView->about_declarations_status = '0';
                $aboutView->update();
                return redirect()->back()->with('status','Successfully Hide Your Declarations Section');
            }else{
                $aboutView->about_declarations_status = '1';
                $aboutView->update();
                return redirect()->back()->with('status','Successfully Show Your Declarations Section');
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
    public function aboutBanner()
    {
        $id = Auth::user()->id;
        $data['personalView'] = personal::where('id','=',$id)->first();
        $data['aboutBanner'] = About::where('id','=',$id)->first();
        $data['title'] = 'Update Your About Baner Section';
        return view('backend/about/aboutBanner',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function aboutBannerUpdate(Request $request, $id)
    {
        $About = About::where('id', '=', $id)->firstOrFail();
        $About->user_id = Auth::user()->id;
        $About->about_banner_headding = $request->input('about_banner_headding');
        $About->about_banner_title = $request->input('about_banner_title');
        $About->about_banner_subtitle = $request->input('about_banner_subtitle');
        $About->about_banner_description = $request->input('about_banner_description');
       
        if($request->hasfile('aboutBannerImage')){
            $destinition = "gallery/".$About->aboutBannerImage;
            if(File::exists($destinition))
            {
                File::delete($destinition);
            }
            $file = $request->file('aboutBannerImage');
            $filename = time() . '.'. $file->getClientOriginalExtension();
            $file->move('gallery/', $filename);
            $About->aboutBannerImage = $filename;
        }
        $About->update();
        
        return redirect()->back()->with('status','About Banner Updated Successfully');
    }


    public function aboutBannercarrier(Request $request, $id)
    {
        $About = About::where('id', '=', $id)->firstOrFail();
        $About->about_banner_objectives = $request->input('about_banner_objectives');
        $About->update();
        
        return redirect()->back()->with('status','Carrier Objective Updated Successfully');
    }

    public function aboutBannerdeclaration(Request $request, $id)
    {
        $About = About::where('id', '=', $id)->firstOrFail();
        $About->about_banner_declaration = $request->input('about_banner_declaration');
        $About->update();
        
        return redirect()->back()->with('status','Carrier Objective Updated Successfully');
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
