<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\personal;
use App\Models\language;
use App\Models\expertise;
use Illuminate\Support\Facades\Auth;
use Image;
use File;


class expertiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutExpertise()
    {
        $data['title'] = 'Expertise Create';
        $id = Auth::user()->id;
        $data['personalView'] = personal::where('id','=',$id)->first();
        $data['expertise'] = expertise::all();
        return view('backend/about/aboutExpertise',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutExpertiseInsert(Request $request)
    {
        $expertise = new expertise;
        $expertise->user_id = Auth::user()->id;
        $expertise->exp_title = $request->input('exp_title');

        $expertise->save();
        
        return redirect()->back()->with('status','Expertise Insert Successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function aboutExpertiseView($id)
    {
        $user_id = Auth::user()->id;
        $data['title'] = 'Expertise Update';
        $data['personalView'] = personal::where('id','=',$user_id)->firstOrFail();
        $data['expertise'] = expertise::where('id','=',$id)->firstOrFail();
        return view('backend/about/aboutExpertiseView',$data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function aboutExpertiseUpdate(Request $request, $id)
    {
        $expertise = expertise::where('id', '=', $id)->firstOrFail();
        $expertise->user_id = Auth::user()->id;
        $expertise->exp_title = $request->input('exp_title');
        $expertise->update();
        
        return redirect()->back()->with('status','Expertise Updated Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function aboutExpertiseDelete($id)
    {
        $delete = expertise::where('id', '=', $id)->firstOrFail();
        $delete->delete();
        return redirect()->back()->with('delete','Expertise Deleted Successfully');
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
