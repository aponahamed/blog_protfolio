<?php

namespace App\Http\Controllers\fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\adminBlog;
use App\Models\category;
use App\Models\Postreview;
use App\Models\TagView;
use App\Models\General;
use App\Models\personal;
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
        $user_id = 1;
        $data['title'] = "Personal Blog Protfolio Blog";
        $data['personal'] = personal::where('user_id','=',$user_id)->firstOrFail();
        $data['General'] = General::where('user_id','=',$user_id)->firstOrFail();
        $data['category'] = category::all();
        $data['tagView'] = TagView::all();
        $data['data'] = adminBlog::orderBy('id', 'desc')->paginate(10);
        $data['recent_post'] = adminBlog::orderBy('id', 'desc')->paginate(2);
        $data['populer_post'] = adminBlog::orderBy('click', 'desc')->paginate(2);
        return view('fontend.blog',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewpost(Request $request, $post_slug)
    {
        $user_id = 1;
        $data['personal'] = personal::where('user_id','=',$user_id)->firstOrFail();
        $data['General'] = General::where('user_id','=',$user_id)->firstOrFail();
        $data['data'] = adminBlog::where('post_slug', '=', $post_slug)->firstOrFail();

        $data['category'] = category::all();
        $myString = adminBlog::where('post_slug', '=', $post_slug)->firstOrFail();
        $finalString = $myString->post_tag;
        $finalTitle = $myString->post_title;
        
        $relatedPost = adminBlog::where('post_tag','like',"%$finalString%")->orwhere('post_title','like',"%$finalTitle%")->paginate(6);
        $data['relatedPost'] = $relatedPost;
        $myArray = explode(',', $finalString);
        $data['post_tag'] = $myArray;
        $data['populer_post'] = adminBlog::orderBy('click', 'desc')->paginate(2);

        $data['post_review'] = Postreview::where('post_slug',$post_slug)->get();
        $post_review = Postreview::where('post_slug',$post_slug)->get();
        $ratting_count = Postreview::where('post_slug',$post_slug)->sum('rattings');
        if($post_review->count()>0){
            $data['rattings_avg'] = $ratting_count/$post_review->count();
        }else{
            $data['rattings_avg'] = 0;
        }

        $data['all_reviews'] = Postreview::where('post_slug',$post_slug)->get();
        
        
        if($myString->post_slug){
            $PostViews = adminBlog::where('post_slug', '=', $myString->post_slug)->firstOrFail();
            if($PostViews){
                $PostView = adminBlog::where('post_slug', '=', $post_slug)->firstOrFail();
                $totalClick = $PostView->click;
                $PostView->click = $totalClick+1;
                $PostView->update();
            }
        }

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
        $user_id = 1;
        $data['personal'] = personal::where('user_id','=',$user_id)->firstOrFail();
        $data['General'] = General::where('user_id','=',$user_id)->firstOrFail();
        $data['title'] = $category_title;
        $data['category'] = category::all();
        $data['tagView'] = TagView::all();
        $data['data'] = adminBlog::where('category_title', '=', $category_title)->orderBy('id', 'desc')->paginate(3);
        $data['recent_post'] = adminBlog::orderBy('id', 'desc')->paginate(2);
        $data['populer_post'] = adminBlog::orderBy('click', 'desc')->paginate(2);
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
