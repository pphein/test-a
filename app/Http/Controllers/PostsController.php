<?php

namespace App\Http\Controllers;

use App\Posts;
use App\User;




use Illuminate\Http\Request;

class PostsController extends Controller
{
	public function index()
	{

		$posts = Posts::where('user_id', auth()->user()->id)->get();
		
		

		dd('hee');

		return view('home', compact('posts'));
	}
	public function __construct()
    {
        $this->middleware('auth');
    }
	
    public function create()
    {
    	return view('create');
    }

   /* public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);



        
  
        $posts = Posts::create($request->all());

        $posts->save();
   
        return redirect()->route('home')
                        ->with('success','Post is created successfully.');
    }
*/
    public function store(){
 
        $posts = new Posts();
 
        $posts->title = request('title');
        $posts->body = request('body');
        $posts->user_id = auth()->user()->id;
 
        $posts->save();

        return redirect('home')->with('success','Post is created successfully.');
 
        // return redirect('home', compact('posts'));
 
    }

   
}
