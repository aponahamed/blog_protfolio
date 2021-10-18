<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\personal;
use App\Models\contact;
use Illuminate\Support\Facades\Auth;
use Image;
use File;

class contactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminContact()
    {
        $id = Auth::user()->id;
        $data['personalView'] = personal::where('id','=',$id)->first();
        $data['contactBanner'] = contact::where('id','=',$id)->first();
        $data['title'] = 'Cotact Update';
        return view('backend/contact',$data);
    }

    public function hideShow($status){
        $user_id = Auth::user()->id;
        $contactView = contact::where('user_id', '=', $user_id)->firstOrFail();
        if($status=='contacts_banner_status'){
            if($contactView->contacts_banner_status=='1'){
                $contactView->contacts_banner_status = '0';
                $contactView->update();
                return redirect()->back()->with('status','Successfully Hide Your Baner Section');
            }else{
                $contactView->contacts_banner_status = '1';
                $contactView->update();
                return redirect()->back()->with('status','Successfully Show Your Baner Section');
            }
        }else{
            return redirect()->back()->with('status','Data Not Found');
        }
    }

    public function contactBanner()
    {
        $id = Auth::user()->id;
        $data['title'] = 'Experience Update';
        $data['personalView'] = personal::where('id','=',$id)->firstOrFail();
        $data['contact'] = contact::where('id','=',$id)->firstOrFail();
        return view('backend/contact/contactBanner',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactBannerUpdate(Request $request, $id)
    {
        $contact = contact::where('id', '=', $id)->firstOrFail();
        $contact->user_id = Auth::user()->id;
        $contact->banner_title = $request->input('banner_title');
        $contact->banner_sub_title = $request->input('banner_sub_title');
        $contact->active_hours = $request->input('active_hours');
        $contact->time_duration = $request->input('time_duration');
        $contact->description = $request->input('description');

       
        if($request->hasfile('contactFeatureImage')){
            $destinition = "gallery/".$contact->contactFeatureImage;
            if(File::exists($destinition))
            {
                File::delete($destinition);
            }
            $file = $request->file('contactFeatureImage');
            $filename = time() . '.'. $file->getClientOriginalExtension();
            $file->move('gallery/', $filename);
            $contact->contactFeatureImage = $filename;
        }
        $contact->update();
        
        return redirect()->back()->with('status','Contact Banner Updated Successfully');
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
