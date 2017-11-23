<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
class TagController extends Controller
{
  public function index(){
    $tags = Tag::paginate(30);
    return view('tags.index')->withTags($tags);
  }

  public function store(Request $request){
    $this->validate($request, array(
      'name' => 'required|max:20',
    ));
    $tags = New Tag;
    $tags->name = $request->name;
    $tags->save();
    return redirect()->route('tags.index')->withMessage('Good! You add a tag!');
  }
  public function edit($id)
  {
      $tags = Tag::find($id);
      return view('tags.edit')->withTags($tags);
  }
  public function update(Request $request, $id)
  {
      $this->validate($request, array(
        'name' => 'required|max:20',
      ));

      $tags = Tag::find($id);

      $tags->name=$request->input('name');

      $tags->save();

      return redirect()->route('tags.index')->withMessage('Good! You edit a tag!');
  }
  public function destroy($id)
  {
    $tags = Tag::find($id);
    $tags->delete();

    return redirect()->route('tags.index')->withMessage('Good! You delete a tag!');

  }
}
