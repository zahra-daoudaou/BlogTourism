<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Categorie;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function adminhome(){
        return view('admin.adminhome');
    }
    public function post_page(){
        
        return view('admin.post_page');
    }
    public function add_post(Request $request){

        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        }
    
        $post= new Post;

        //$post->category_id = $request->category_id;
        //$post->title = $request->title;
        $post->description = $request->description;
        $post->image = $imageName;
        $post->save();

        //$categories = Categorie::all();

        return redirect()->back()->with('msg', 'Post added successfully');
    }
    public function show_post(Request $request){

        $titleFilter = $request->query('title');

        $posts = Post::query();

        if ($titleFilter) {
            $posts->where('title', 'like', '%' . $titleFilter . '%');
        }

        $posts = $posts->paginate(10);
        $post = Post::all();

        return view('admin.show_post',compact('post'));
    }
}





/*
//not working TT

<div class="div_center">
<select name="category_id" id="category_id">
  <option value="">Select a category</option>
    @foreach($Categorie as $categorie)
  <option value="{{ $category->id }}">{{ $Categorie->name }}</option>
    @endforeach
</select>
</div>
*/