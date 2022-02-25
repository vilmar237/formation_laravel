<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    
    public function index(){

        // $post = Post::find(1);
        
        // $post->update([
        //     'title'=>'Titre mi a jour'
        // ]);
        // dd('edite');


        $posts = Post::all();

        $title= 'mon super titre';
        return view('articles',[
            'posts'=>$posts
        ]);
        //return view('articles')->with('title',$title);
        // return view('articles',['title'=>'$title','title2'=>'$title2']
        // compact('posts') qui peut etre parcouru avec le foreach au niveau de la vue
        
    }
    public function show($id){
        // $posts=[
        //     1 =>'bonjour ',
        //     2 =>'bonsoir'
        // ];
        // $post = $posts[$id] ?? 'pas de titre';
    $post= Post::findOrFail($id);
    // $post = Post::where('title',=,'ce que l'on desire chercher')->firstOrFail();
        return view ('article',['post'=>$post]);

    }
    public function create(){
        return view('form');
    }
    public function store(Request $request){
        // 
        Post::create([                                      
            'title'=>$request->title,
            'content'=>$request->content
        ]);

    }
}
