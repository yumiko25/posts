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
    
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }
    
    public function index(Request $request)
    {
        
        $posts = Post::orderBy('title', 'desc')->paginate(25);   
        $cond_title = $request->cond_title;
                if ($cond_title != '') {
                    $posts = Post::where('title','like','%'.$cond_title.'%')->orderBy('created_at','desc')->paginate(15);
                }else {
                    $posts = Post::orderBy('created_at','desc')->paginate(15);
                 }
        return view('posts.index',[
            'posts' => $posts,
            
            ]);
    }
    
        
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
        
        if (\Auth::user()->id === $post->user_id) {
            
        return view('posts.edit', [
            'post' => $post,
            ]);}else{
                
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
        
        if (\Auth::user()->id === $post->user_id) { 
         $post->delete();
        }else{
         

        }
         
         return redirect('/');
    }
}
