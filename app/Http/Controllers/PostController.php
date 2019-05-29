<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $posts = DB::table('posts')->paginate(2); //Facades
        $posts=Post::paginate(2); //version Eloquebnt

        $num=$posts->count();

        return view('posts/posts')->with(['titulo' => "Listado de posts",'posts'=>$posts,'num'=>$num]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts/newpost')->with(['titulo' => "Nuevo posts"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post=new Post;
        $post->title=$request->title;
        $post->article=$request->text;
        $post->save();

        return redirect('/show_all'); //rutas ?¿?

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($post)
    {
        $AllPost=Post::where('id',$post)->get();
        return view('posts/post')->with(['posts'=>$AllPost]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($postId)
    {
        $post=Post::where('id',$postId)->get();
        return view('posts/postedit')->with(['postEdit'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request/*,$id*/)
    {
//¿Es mejor recibir el id como parametro desde la vista o a traves del Request?
       // $postUpdate = Post::where($id)->firstOrFail();
        $postUpdate=Post::find($request->id);
        $postUpdate->title=$request->title;
        $postUpdate->article=$request->text;
        $postUpdate->save();

        return redirect('/show_all');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::findOrFail($id);
        $post->delete();
        return redirect('/show_all');
    }
}
