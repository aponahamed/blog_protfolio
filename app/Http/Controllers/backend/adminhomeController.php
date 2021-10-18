<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\personal;
use App\Models\General;
use Illuminate\Support\Facades\Auth;

use Image;
use File;

class adminhomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        $id = Auth::user()->id;
        $data['title'] = 'Admin Panel';
        $data['generalSetting'] = General::where('id', '=', $id)->firstOrFail();
        $data['personal'] = personal::where('user_id', '=', $id)->first();
        $data['personalView'] = personal::where('id','=',$id)->first();
        return view('backend.adminhome',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generalUpdate(Request $request, $id)
    {
        $General = General::where('id', '=', $id)->firstOrFail();
        $General->user_id = Auth::user()->id;
        $General->company_personal_name = $request->input('company_personal_name');
        $General->company_personal_title = $request->input('company_personal_title');
        $General->tagline = $request->input('tagline');

        if($request->hasfile('favIcom')){
            $destinition = "gallery/".$General->favIcom;
            if(File::exists($destinition))
            {
                File::delete($destinition);
            }
            $file = $request->file('favIcom');
            $filename = time() . '.'. $file->getClientOriginalExtension();
            $file->move('gallery/', $filename);
            $General->favIcom = $filename;
        }
        if($request->hasfile('company_logo')){
            $destinition = "gallery/".$General->company_logo;
            if(File::exists($destinition))
            {
                File::delete($destinition);
            }
            $file = $request->file('company_logo');
            $filename = time() . '.'. $file->getClientOriginalExtension();
            $file->move('gallery/', $filename);
            $General->company_logo = $filename;
        }

        $General->update();
        
        return redirect()->back()->with('status','General Views Updated Successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function generalUpdateFooter(Request $request , $id)
    {
        $General = General::where('id', '=', $id)->firstOrFail();
        $General->footer_title = $request->input('footer_title');
        $General->update();
        return redirect()->back()->with('status','Footer title Updated Successfully');
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
