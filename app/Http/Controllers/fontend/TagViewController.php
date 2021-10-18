<?php

namespace App\Http\Controllers\fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\adminBlog;
use App\Models\TagView;
use App\Models\category;
use App\Models\Postreview;
use App\Models\General;
use App\Models\personal;
use Illuminate\Support\Facades\Auth;


class TagViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tagview($value)
    {
        $user_id = 1;
        $data['personal'] = personal::where('user_id','=',$user_id)->firstOrFail();
        $data['General'] = General::where('user_id','=',$user_id)->firstOrFail();
        $data['post_tag'] = $value;
        $data['category'] = category::all();
        $data['tagView'] = TagView::all();
        $data['data'] = adminBlog::where('post_tag', 'like' , "%$value%")->orderBy('id', 'desc')->paginate(10);
        $data['recent_post'] = adminBlog::orderBy('id', 'desc')->paginate(2);
        $data['populer_post'] = adminBlog::orderBy('click', 'desc')->paginate(2);
        return view('fontend/tagview',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function insert()
    {
        $data['title'] = "Common Tag Add";
        return view('backend/Tag/tagviewinsert',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $TagView = new TagView;
        $TagView->tag_name = $request->input('tag_name');
        $TagView->user_id = Auth::user()->id;
       
        $TagView->save();

        return redirect()->back()->with('status','Tag Inserted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TagView  $tagView
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data['data'] = TagView::all();
        $data['title'] = "Tags Show";
        return view('backend/Tag/tagviewshow',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TagView  $tagView
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['title'] = "Tag Update";
        $data['data'] = TagView::find($id);
        return view('backend/Tag/tagviewedit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TagView  $tagView
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $TagView = TagView::find($id);
        $TagView->tag_name = $request->input('tag_name');
        $TagView->user_id = $request->input('user_id');
        $TagView->update();
        return redirect()->back()->with('status','Tag Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TagView  $tagView
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $delete = TagView::find($id);
        $delete->delete();
        return redirect()->back()->with('delete','Category Deleted Successfully');
    }
}
