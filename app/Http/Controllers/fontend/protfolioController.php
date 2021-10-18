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
use App\Models\contact;
use App\Models\protfolio;

class protfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function protfolio()
    {
        $user_id = 1;
        $data['title'] = "Personal Blog Protfolio Protfolio";
        $data['personal'] = personal::where('user_id','=',$user_id)->firstOrFail();
        $data['General'] = General::where('user_id','=',$user_id)->firstOrFail();
        $data['protfolio'] = protfolio::where('user_id','=',$user_id)->firstOrFail();
        return view('fontend.protfolio',$data);
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
