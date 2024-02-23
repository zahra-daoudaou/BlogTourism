<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Post;

use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
    public function index(){
        if(Auth::id()){

            $post=Post::all();

            $usertype=Auth()->user()->usertype;
            if($usertype=='user'){
                return view('home.homepage',compact('post'));
            }
            else if($usertype=='admin'){
                return view('admin.adminhome');
            }
            else{
                return redirect()->back();
            }
        }
    }
    public function post(){
        return view('post');
    }
    public function homepage(){
        $post=Post::all();
        return view('home.homepage',compact('post'));
    }
    public function post_details($id){

        $post=Post::find($id);

        return view('home.post_details',compact('post'));
    }
    public function create_post(){
        return view('home.create_post');
    }
    public function user_post(Request $request){

        $user = Auth()->user();
        $userid = $user->id;

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

        $post->title = $request->title;
        $post->description = $request->description;
        $post->image = $imageName;
        $post->save();


        return redirect()->back()->with('msg', 'Post added successfully');
    }
}
