<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\adminBlog;
use App\Models\DB;
use App\Models\User;
use App\Models\personal;
use Illuminate\Support\Facades\Auth;

use Image;
use File;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function category()
    {
        $id = Auth::user()->id;
        $data['personalView'] = personal::where('id','=',$id)->first();
        $data['title'] = "Category Add";
        return view('backend/category',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $id = Auth::user()->id;
        $data['personalView'] = personal::where('id','=',$id)->first();
        $data['data'] = category::all();
        $data['title'] = "Category View";
        return view('backend/categoryView',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new category;
        $category->category_title = $request->input('category_title');
        $category->user_id = Auth::user()->id;
       
        $category->save();

        return redirect()->back()->with('status','Category Inserted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateView($id)
    {
        $id = Auth::user()->id;
        $data['personalView'] = personal::where('id','=',$id)->first();
        $data['title'] = "Category Update";
        $data['data'] = category::find($id);
        return view('backend/categoryUpdateView',$data);
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
        $category = category::find($id);
        $category->category_title = $request->input('category_title');
        $category->user_id = $request->input('user_id');
        $category->update();
        return redirect()->back()->with('status','Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        
        $delete = category::find($id);
        $name = $delete->category_title;
        if($delete){
            $adminBlog = adminBlog::where('category_title', '=', $name)->firstOrFail();
            $adminBlog->category_title = 'Uncategories';
            $adminBlog->update();
        }

        $delete->delete();
        return redirect()->back()->with('delete','Category Deleted Successfully');
    }

}
