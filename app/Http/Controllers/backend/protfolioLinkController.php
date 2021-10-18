<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\personal;
use App\Models\language;
use App\Models\protfolioLinks;
use Illuminate\Support\Facades\Auth;
use Image;
use File;

class protfolioLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutLinks()
    {
        $data['title'] = 'Language Create';
        $id = Auth::user()->id;
        $data['personalView'] = personal::where('id','=',$id)->first();
        $data['protfolioLinks'] = protfolioLinks::all();
        return view('backend/about/aboutProtfolioLink',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutLinksInsert(Request $request)
    {
        $protfolioLinks = new protfolioLinks;
        $protfolioLinks->user_id = Auth::user()->id;
        $protfolioLinks->link_title = $request->input('link_title');
        $protfolioLinks->links = $request->input('links');

        $protfolioLinks->save();
        
        return redirect()->back()->with('status','Links Insert Successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function aboutLinksView($id)
    {
        $user_id = Auth::user()->id;
        $data['title'] = 'Links Update';
        $data['personalView'] = personal::where('id','=',$user_id)->firstOrFail();
        $data['protfolioLinks'] = protfolioLinks::where('id','=',$id)->firstOrFail();
        return view('backend/about/aboutProtfolioLinkView',$data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function aboutLinksUpdate(Request $request,$id)
    {
        $protfolioLinks = protfolioLinks::where('id', '=', $id)->firstOrFail();
        $protfolioLinks->user_id = Auth::user()->id;
        $protfolioLinks->link_title = $request->input('link_title');
        $protfolioLinks->links = $request->input('links');

        $protfolioLinks->update();
        
        return redirect()->back()->with('status','Links Updated Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function aboutLinksDelete($id)
    {
        $delete = protfolioLinks::where('id', '=', $id)->firstOrFail();
        $delete->delete();
        return redirect()->back()->with('delete','Links Deleted Successfully');
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
