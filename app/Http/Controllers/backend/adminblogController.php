<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\adminBlog;
use Image;
use File;
class adminblogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminblog()
    {
        $data = adminblog::all();
        return view('backend.adminblog',compact('data'));
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
        $slug = md5( time() );
        $adminBlog = new adminBlog;
        $adminBlog->user_id = '123';
        $adminBlog->post_slug = $slug;
        $adminBlog->post_title = $request->input('post_title');
        $adminBlog->post_description = $request->input('post_description');
        $adminBlog->meta_title = $request->input('meta_title');
        $adminBlog->meta_description = $request->input('meta_description');
        $adminBlog->create_date = date('Y-m-d');
        if($request->hasfile('featuredImage')){
            $file = $request->file('featuredImage');
            $filename = time() . '.'. $file->getClientOriginalExtension();
            $file->move('upload/post/featuredImage/', $filename);
            $adminBlog->featuredImage = $filename;
        }
        $adminBlog->save();

        return redirect()->back()->with('status','Blog Post Is Inserted Successfully');
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
        $datas = adminblog::all();
        $data = adminblog::find($id);
        return view('backend.blogedit',compact('data','datas'));
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
        $adminBlog = adminBlog::find($id);
        $adminBlog->user_id = $request->input('user_id');
        $adminBlog->post_slug = $request->input('post_slug');
        $adminBlog->post_title = $request->input('post_title');
        $adminBlog->post_description = $request->input('post_description');
        $adminBlog->meta_title = $request->input('meta_title');
        $adminBlog->meta_description = $request->input('meta_description');
        if($request->hasfile('featuredImage')){
            $destinition = "upload/post/featuredImage/".$adminBlog->featuredImage;
            if(File::exists($destinition))
            {
                File::delete($destinition);
            }
            $file = $request->file('featuredImage');
            $filename = time() . '.'. $file->getClientOriginalExtension();
            $file->move('upload/post/featuredImage/', $filename);
            $adminBlog->featuredImage = $filename;
        }
        $adminBlog->update();

        return view('backend.adminblog')->with('status','Blog Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $delete = adminBlog::find($id);
        $desPath = "upload/post/featuredImage/".$delete->featuredImage;
        if(File::exists($desPath)){
            File::delete($desPath);
        }
        $delete->delete();
        return redirect()->back()->with('delete','Blog Post Deleted Successfully');
    }
}
