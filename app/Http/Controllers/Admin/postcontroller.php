<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
 use App\Model\user\post;
  use App\Model\user\tag;
   use App\Model\user\category;
class postcontroller extends Controller
{
 public function __construct()
    {
        $this->middleware('auth:admin');
    }


/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=post::all();
         return view('admin.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags=tag::all();
        $categories=category::all();

        return view('admin.post.post',compact('tags','categories'));
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

        $this->validate($request,[
           'title'=>'required',
           'subtitle'=>'required',
           'slug'=>'required',
           'body'=>'required',
            'image'=>'required'
            ]);
           if($request->hasFile('image')){
          $imageName=$request->image->store('public');
           }

          
        $post=new post;
        $post->title=$request->title;
        $post->subtitle=$request->subtitle;
        $post->slug=$request->slug;
        $post->body=$request->body;
        $post->status=$request->status;
         $post->image=$imageName;
         $post->save();
        $post->tags()->sync($request->tags);
         $post->categories()->sync($request->categories);
       
      // return view('admin.post.post');
       return redirect(route('post.index'));
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
        $post=post::with('tags','categories')->where('id',$id)->first();
         $tags=tag::all();
        $categories=category::all();
        return view('admin.post.edit',compact('post','tags','categories'));
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
         $this->validate($request,[
           'title'=>'required',
           'subtitle'=>'required',
           'slug'=>'required',
           'body'=>'required',
           'image'=>'required'
            ]);
           if($request->hasFile('image')){
          $imageName=$request->image->store('public');
           }
        $post=post::find($id);
        $post->title=$request->title;
        $post->subtitle=$request->subtitle;
        $post->slug=$request->slug;
        $post->body=$request->body;
         $post->image=$imageName;
         $post->status=$request->status;
         $post->tags()->sync($request->tags);
         $post->categories()->sync($request->categories);
        $post->save();
        return redirect(route('post.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=post::find($id);
       $post->delete();
      // post::destroy($id);
        return back();
    }
}
