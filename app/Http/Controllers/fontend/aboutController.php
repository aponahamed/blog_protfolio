<?php

namespace App\Http\Controllers\fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\homeView;
use App\Models\personal;
use App\Models\homeSkills;
use App\Models\homeWorks;
use App\Models\General;
use App\Models\About;
use App\Models\language;
use App\Models\experience;
use App\Models\certification;
use App\Models\Education;
use App\Models\expertise;
use App\Models\protfolioLinks;


class aboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        $user_id = 1;
        $data['title'] = "Personal Blog Protfolio about";
        $data['personal'] = personal::where('user_id','=',$user_id)->firstOrFail();
        $data['General'] = General::where('user_id','=',$user_id)->firstOrFail();
        $data['About'] = About::where('user_id','=',$user_id)->firstOrFail();
        $data['language'] = language::all();
        $data['experience'] = experience::all();
        $data['certification'] = certification::all();
        $data['Education'] = Education::all();
        $data['expertise'] = expertise::all();
        $data['protfolioLinks'] = protfolioLinks::all();
        return view('fontend.about',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ckeditorUpload(Request $request)
    {
        $path_url = 'storage/' . Auth::id();

      if ($request->hasFile('upload')) {
         $originName = $request->file('upload')->getClientOriginalName();
         $fileName = pathinfo($originName, PATHINFO_FILENAME);
         $extension = $request->file('upload')->getClientOriginalExtension();
         $fileName = Str::slug($fileName) . '_' . time() . '.' . $extension;
         $request->file('upload')->move(public_path($path_url), $fileName);
         $url = asset($path_url . '/' . $fileName);
      }

      return response()->json(['url' => $url]);
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
