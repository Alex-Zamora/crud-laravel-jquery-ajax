<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Post;

class PostController extends Controller
{
	public function listing()
	{
		$posts = Post::all();

		return response()->json(
			$posts->toArray()
		);
	}

	public function index()
	{
		return view('posts.index');
	}


	//Muestra la vista del form
    public function create()
    {
    	return view('posts.create');
    }

    //Al dar clic en guardar la data llega a este controller y crea un nuevo post
    public function store(PostRequest $request)
    {
    	if($request->ajax()){
    		
    		Post::create($request->all());

    		return response()->json([
    			"mensaje" => "Post Creado",
    		]);
    	}
    }

    public function edit($id)
    {
    	$post = Post::find($id);

    	return response()->json(
    		$post->toArray()
    	);
    }

    public function update(Request $request, $id)
    {
    	$post = Post::find($id);
    	//Si ya tenemos una instancia de modelo podemos usar fill()
    	$post->fill($request->all());
    	$post->save();

    	return response()->json([
    		"mensaje" => "Se actualizo"
    	]);
    }

    public function destroy(Request $request, $id)
    {
    	if($request->ajax()){

    		$post = Post::find($id);
    		$post->delete();

    		return response()->json([
                'message' => $post->name . 'fue elminado correctamente'
            ]);
    	}
    }
}
