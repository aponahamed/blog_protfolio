<?php

namespace App\Http\Controllers\fontend;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\personal;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
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
        $Subscriber = new Subscriber;
        $Subscriber->name = $request->input('name');
        $Subscriber->email = $request->input('email');
        $Subscriber->date = $request->input('date');
        $Subscriber->time = $request->input('time');
        $Subscriber->message = $request->input('message');
        
        $Subscriber->save();

        return redirect()->back()->with('status','Blog Post Is Inserted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $id = Auth::user()->id;
        $data['title'] = "Category Update";
        $data['subscriber'] = Subscriber::all();
        $data['personalView'] = personal::where('id','=',$id)->first();
        return view('backend.subscriberShow',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscriber $subscriber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscriber $subscriber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $delete = Subscriber::find($id);
        $delete->delete();
        return redirect()->back()->with('delete','Category Deleted Successfully');
    }
}
