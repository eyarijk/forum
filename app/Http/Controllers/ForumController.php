<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forum;
use App\Tag;

class ForumController extends Controller
{
    function __construct()
    {
      return $this->middleware('auth')->except('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $forum = Forum::orderBy('id','desc')->paginate(10);
      return view('forum.index')->withForum($forum);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        return view('forum.create')->withTags($tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
          'title' => 'required|max:200|min:3',
          'post' => 'required|min:10',
          'tags' => 'required|min:1'
        ));
        $forum = New Forum;
        $forum->title=$request->title;
        $forum->slug=str_slug($forum->title);
        $forum->post=$request->post;
        $forum->user_id=auth()->id();
        $forum->save();

        $forum->tags()->sync($request->tags);

        return redirect()->route('forum.show',$forum->slug)->withMessage('Good! You created a question!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $forum = Forum::where('slug','=',$slug)->first();
        return view('forum.show')->withForum($forum);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $tags = Tag::all();
        $forum = Forum::where('slug','=',$slug)->first();
        return view('forum.edit')->withForum($forum)->withTags($tags);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $this->validate($request, array(
          'title' => 'required|max:200|min:3',
          'post' => 'required|min:10'
        ));

        $forum = Forum::where('slug','=',$slug)->first();

        $forum->title=$request->input('title');
        $forum->post=$request->input('post');

        $forum->save();

        $forum->tags=$request->input('tags');
        $forum->tags()->sync($request->tags);

        return redirect()->route('forum.show',$forum->slug)->withMessage('Good! You edit a question!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $forum = Forum::find($id);
      $forum->delete();

      return redirect()->route('forum.index')->withMessage('Good! You delete a question!');

    }
}
