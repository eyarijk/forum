<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forum;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $forum = Forum::all();
      return view('forum.index')->withForum($forum);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forum.create');
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
          'post' => 'required|min:10'
        ));
        $forum = New Forum;
        $forum->title=$request->title;
        $forum->post=$request->post;

        $forum->save();

        return redirect()->route('forum.show',$forum->id)->withMessage('Good! You created a question!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $forum = Forum::find($id);
        return view('forum.show')->withForum($forum);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $forum = Forum::find($id);
        return view('forum.edit')->withForum($forum);
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
        $this->validate($request, array(
          'title' => 'required|max:200|min:3',
          'post' => 'required|min:10'
        ));

        $forum = Forum::find($id);

        $forum->title=$request->input('title');
        $forum->post=$request->input('post');

        $forum->save();

        return redirect()->route('forum.show',$forum->id)->withMessage('Good! You edit a question!');

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
