<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\personal;
use App\Models\protfolio;
use Illuminate\Support\Facades\Auth;

use Image;
use File;

class protfoliosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminProtfolio()
    {
        $id = Auth::user()->id;
        $data['personalView'] = personal::where('id','=',$id)->first();
        $data['protfolioView'] = protfolio::where('id','=',$id)->first();
        $data['title'] = 'Protfolio Update';
        return view('backend/protfolio',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function protfolioBannerUpdate(Request $request, $id)
    {
        $protfolio = protfolio::where('id', '=', $id)->firstOrFail();
        $protfolio->user_id = Auth::user()->id;
        $protfolio->protfolio_banner_title = $request->input('protfolio_banner_title');
        $protfolio->protfolio_banner_description = $request->input('protfolio_banner_description');

        $protfolio->update();
        
        return redirect()->back()->with('status','Protfolio Updated Successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function showHide($status)
    {
        $user_id = Auth::user()->id;
        $protfolioView = protfolio::where('user_id', '=', $user_id)->firstOrFail();
        if($status=='protfolio_banner_status'){
            if($protfolioView->protfolio_banner_status=='1'){
                $protfolioView->protfolio_banner_status = '0';
                $protfolioView->update();
                return redirect()->back()->with('status','Successfully Hide Your Baner Section');
            }else{
                $protfolioView->protfolio_banner_status = '1';
                $protfolioView->update();
                return redirect()->back()->with('status','Successfully Show Your Baner Section');
            }
        }else{
            return redirect()->back()->with('status','Data Not Found');
        }
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
