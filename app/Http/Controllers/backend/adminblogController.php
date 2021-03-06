<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\adminBlog;
use App\Models\category;
use App\Models\personal;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
        $data['data'] = adminblog::all();
        $data['title'] = 'Admin Blog Post';
        $id = Auth::user()->id;
        $data['personalView'] = personal::where('id','=',$id)->first();
        return view('backend.adminblog',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blogcreate()
    {
        $data['data'] = category::all();
        $data['title'] = 'Blog Post Create';
        $id = Auth::user()->id;
        $data['personalView'] = personal::where('id','=',$id)->first();
        return view('backend/blogcreate',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 
        $slug_title = $request->input('post_title');
       
        $adminBlog = new adminBlog;
        $adminBlog->user_id = Auth::user()->id;
        $adminBlog->post_title = $request->input('post_title');
        $slug = Str::slug($slug_title, "-");

        $slug_count = adminBlog::where('post_slug', 'LIKE', "{$slug}%")->count();
        $slug_new = $slug_count> 0 ? ++$slug_count : '';
        $final_slug = $slug_new> 0 ? "$slug-$slug_new" : $slug;

        $adminBlog->post_slug = $final_slug;
        $adminBlog->post_description = $request->input('post_description');
        $adminBlog->meta_title = $request->input('meta_title');
        $adminBlog->meta_description = $request->input('meta_description');
        $adminBlog->meta_keywords = $request->input('meta_keywords');
        $adminBlog->create_date = date('Y-m-d');
        $adminBlog->category_title = $request->input('category_title');
        $adminBlog->post_tag = $request->input('post_tag');
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
    public function edit($post_slug)
    {
        $id = Auth::user()->id;
        $data['personalView'] = personal::where('id','=',$id)->first();
        $data['data'] = adminblog::where('post_slug', '=', $post_slug)->firstOrFail();
        $data['data_c'] = category::all();
        $data['title'] = 'Blog Post Edit';
        return view('backend.blogedit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $post_slug)
    {
        $adminBlog = adminBlog::where('post_slug', '=', $post_slug)->firstOrFail();
        $adminBlog->user_id = $request->input('user_id');
        $adminBlog->post_slug = $request->input('post_slug');
        $adminBlog->post_title = $request->input('post_title');
        $adminBlog->post_description = $request->input('post_description');
        $adminBlog->meta_title = $request->input('meta_title');
        $adminBlog->meta_description = $request->input('meta_description');
        $adminBlog->meta_keywords = $request->input('meta_keywords');
        $adminBlog->category_title = $request->input('category_title');
        $adminBlog->post_tag = $request->input('post_tag');
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
        
        return redirect()->back()->with('status','Blog Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($post_slug)
    {
        $delete = adminBlog::where('post_slug', '=', $post_slug)->firstOrFail();
        $desPath = "upload/post/featuredImage/".$delete->featuredImage;
        if(File::exists($desPath)){
            File::delete($desPath);
        }
        $delete->delete();
        return redirect()->back()->with('delete','Blog Post Deleted Successfully');
    }


}
