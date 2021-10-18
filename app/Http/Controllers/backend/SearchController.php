<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\adminBlog;
use App\Models\category;
use App\Models\Postreview;
use App\Models\TagView;
use App\Models\General;
use App\Models\personal;
use Illuminate\Support\Facades\Auth;
use Image;
use File;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postSearch(Request $request)
    {
        $user_id = Auth::user()->id;
        $data['personal'] = personal::where('user_id','=',$user_id)->firstOrFail();
        $data['General'] = General::where('user_id','=',$user_id)->firstOrFail();
        $value = $request->input('search');
        $data['title'] = 'Search: '.$value;
        $data['data'] = adminBlog::where('post_title','like',"%$value%")->orwhere('post_description','like',"%$value%")->paginate(10);
        $data['category'] = category::all();
        $data['tagView'] = TagView::all();
        $data['populer_post'] = adminBlog::orderBy('click', 'desc')->paginate(2);
        $data['recent_post'] = adminBlog::orderBy('id', 'desc')->paginate(2);
        return view('fontend.postSearch',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
