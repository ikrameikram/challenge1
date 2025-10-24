<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Étape 5 : Créer le contrôleur CRUD

    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

   
    public function create()
    {
        return view('posts.create');
    }

   
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'content' => 'required|string',
            'status' => 'nullable|string|in:draft,published',
        ]);

        Post::create($validated);

        // Redirige vers la liste avec un message
        return redirect()->route('posts.index')->with('success', 'Post créé avec succès !');
    }


    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

  
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

  
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'content' => 'required|string',
            'status' => 'nullable|string|in:draft,published',
        ]);

        $post->update($validated);

        return redirect()->route('posts.index')->with('success', 'Post mis à jour avec succès !');
    }


    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post supprimé avec succès !');
    }
}
