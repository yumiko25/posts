<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    // public function __construct()
    // {
    //     $this->middleware('auth')->except(['index','show']);
    // }
    
    public function index()
    {
        
        
        $posts = Post::orderBy('title', 'desc')->paginate(25);   
        return view('posts.index',[
            'posts' => $posts,
            ]);
    }
    
        // $data = [];
        // if (\Auth::check()) { 

        //     $user = \Auth::user();
        
        //  $data = [
        //         'user' => $user,
        //         'posts' => $posts,
        //     ];
        // }
        // return view('welcome', $data);

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = new Post;
        
        return view('posts.create', [
            'post' => $post,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'name' => 'required|max:20',
            'work' => 'required|max:255',
            'good_thing_content' => 'required|max:255',
            'bad_thing_content' => 'required|max:255',
            'advice' => 'required|max:255',
        ]);
        
        // $request->user()->posts()->create([
        //     'title' => $request->title,
        //     'name' => $request->name,
        //     'work' => $request->work,
        //     'good_thing_content' => $request->good_thing_content,
        //     'bad_thing_content' => $request->bad_thing_content,
        //     'advice' => $request->advice
        // ]);
        $post = new Post;
        $post->user_id = $request->user()->id;
        $post->title = $request->title;
        $post->name = $request->name;
        $post->work = $request->work;
        $post->good_thing_content = $request->good_thing_content;
        $post->bad_thing_content = $request->bad_thing_content;
        $post->advice = $request->advice;
        $post->save();
        return redirect('/home');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($title)
    {
        $post = Post::findOrFail($title);
        
        return view('posts.show', [
            'post' => $post,
            ]);
        //   $post = Post::findOrFail($title);

        // if (\Auth::id() === $post->user_id) {
        //     return view('posts.show', [
        //         'post' => $post,
        //     ]);
        
        // }
        //  return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($title)
    {
        $post = Post::findOrFail($title);
        
        if (\Auth::id() === $post->user_id) {
            
        return view('posts.edit', [
            'post' => $post,
            ]);
        
        }
        return redirect('/');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $title)
    {
       $request->validate([
            'title' => 'required',
            'name' => 'required|max:20',
            'work' => 'required|max:255',
            'good_thing_content' => 'required|max:255',
            'bad_thing_content' => 'required|max:255',
            'advice' => 'required|max:255',
        ]);
       
        $post = Post::findOrFail($title);
        if (\Auth::id() === $post->user_id) {
            
            $post->user_id = $request->user()->id;
            $post->title = $request->title;
            $post->name = $request->name;
            $post->work = $request->work;
            $post->good_thing_content = $request->good_thing_content;
            $post->bad_thing_content = $request->bad_thing_content;
            $post->advice = $request->advice;
            $post->save();
            
            return redirect('/home');
        }
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($title)
    {
         $post = Post::findOrFail($title);
        
        if (\Auth::id() === $post->user_id) { 
         $post->delete();
        }
         
         return redirect('/');
    }
}
