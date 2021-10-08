<?php

namespace App\Http\Controllers\fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\adminBlog;
use App\Models\category;
use \Illuminate\Support\Str;

class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blog()
    {
        $data['category'] = category::all();
        $data['data'] = adminBlog::orderBy('id', 'desc')->paginate(3);
        $data['recent_post'] = adminBlog::orderBy('id', 'desc')->paginate(2);
        return view('fontend.blog',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewpost($post_slug)
    {
        $data['data'] = adminBlog::where('post_slug', '=', $post_slug)->firstOrFail();
        $data['category'] = category::all();
        $myString = adminBlog::where('post_slug', '=', $post_slug)->firstOrFail();
        $finalString = $myString->post_tag;
        $myArray = explode(',', $finalString);
        $data['post_tag'] = $myArray;
        return view('fontend.viewpost',$data);
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
    public function categoriesView($category_title)
    {   
        $data['category'] = category::all();
        $data['data'] = adminBlog::where('category_title', '=', $category_title)->orderBy('id', 'desc')->paginate(3);
        $data['recent_post'] = adminBlog::orderBy('id', 'desc')->paginate(2);
        return view('fontend/categoriesView',$data);
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
