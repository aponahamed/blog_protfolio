<?php

namespace App\Http\Controllers\fontend;
use App\Http\Controllers\Controller;
use App\Models\Postreview;
use Illuminate\Http\Request;
use App\Models\adminBlog;

class PostreviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
       
        $Postreview = new Postreview;
        $Postreview->name = $request->input('name');
        $Postreview->rattings = $request->input('rattings');
        $Postreview->email = $request->input('email');
        $Postreview->message = $request->input('message');
        $Postreview->post_slug = $request->input('post_slug');

        if($Postreview->post_slug){
            $adminBlog = adminBlog::where('post_slug', '=', $Postreview->post_slug)->firstOrFail();
            $data_rat = $adminBlog->rattings;
            $count_rat = $adminBlog->count_rattings;
            $adminBlog->rattings = $request->input('rattings')+$data_rat;
            $adminBlog->count_rattings = $count_rat+1;
            $adminBlog->update();
        }
        
        $Postreview->save();

        return redirect()->back()->with('status','Blog Post Is Inserted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Postreview  $postreview
     * @return \Illuminate\Http\Response
     */
    public function show(Postreview $postreview)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Postreview  $postreview
     * @return \Illuminate\Http\Response
     */
    public function edit(Postreview $postreview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Postreview  $postreview
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Postreview $postreview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Postreview  $postreview
     * @return \Illuminate\Http\Response
     */
    public function destroy(Postreview $postreview)
    {
        //
    }
}
