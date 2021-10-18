<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\personal;
use App\Models\language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;
use File;

class languageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutLanguage()
    {
        $data['title'] = 'Language Create';
        $id = Auth::user()->id;
        $data['personalView'] = personal::where('id','=',$id)->first();
        $data['language'] = language::all();
        return view('backend/about/aboutLanguage',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutLanguageInsert(Request $request)
    {
        $language = new language;
        $language->user_id = Auth::user()->id;
        $language->language_title = $request->input('language_title');
        $language->language_experience = $request->input('language_experience');
        $language->language_class = $request->input('language_class');
        $language->language_percentage = $request->input('language_percentage');

        $language->save();
        
        return redirect()->back()->with('status','Language Insert Successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function aboutLanguageView($id)
    {
        $user_id = Auth::user()->id;
        $data['title'] = 'Language Update';
        $data['personalView'] = personal::where('id','=',$user_id)->firstOrFail();
        $data['language'] = language::where('id','=',$id)->firstOrFail();
        return view('backend/about/aboutLanguageView',$data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\r  $r
     * @return \Illuminate\Http\Response
     */
    public function aboutLanguageUpdate(Request $request, $id)
    {
        $language = language::where('id', '=', $id)->firstOrFail();
        $language->user_id = Auth::user()->id;
        $language->language_title = $request->input('language_title');
        $language->language_experience = $request->input('language_experience');
        $language->language_class = $request->input('language_class');
        $language->language_percentage = $request->input('language_percentage');
        $language->update();
        
        return redirect()->back()->with('status','Language Updated Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\r  $r
     * @return \Illuminate\Http\Response
     */
    public function aboutLanguageDelete($id)
    {
        $delete = language::where('id', '=', $id)->firstOrFail();
        $delete->delete();
        return redirect()->back()->with('delete','Language Deleted Successfully');
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
