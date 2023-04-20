<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.post', [
            "title" => "My Post",
            "posts" => Post::where('user_id', Auth::user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.createpost', [
            "title" => "Create Post",
            "kategori" => Category::all()
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

        // return $request->file('gambar')->store('gambar-post');

        $validateData = $request->validate([
            'judul' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'gambar' => 'image|file|max:1024',
            'isi' => 'required'
        ]);

        if ($request->gambar) {
            $validateData ['gambar'] = $request->file('gambar')->store('gambar-post');
        }

        $validateData ['user_id'] = Auth::user()->id;
        $validateData ['preview'] = Str::limit(strip_tags($request->isi), 200);

        Post::create($validateData);

        return redirect('/mypost')->with('success', 'Post Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        
        $post = Post::Where('slug', $slug)->first();
        return view('dashboard.showpost', [
            "title" => "Post",
            "posts" => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $post = Post::Where('slug', $slug)->first();
        return view('dashboard.editpost', [
            "title" => "Edit Post",
            "kategori" => Category::all(),
            "posts" => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $post = Post::Where('slug', $slug)->first();

        $cek = [
            'judul' => 'required|max:255',
            'category_id' => 'required',
            'gambar' => 'image|file|max:1024',
            'isi' => 'required'
        ];

        if($request->slug != $post->slug){
            $cek ['slug'] = 'required|unique:posts';
        }

        $validateData = $request->validate($cek);

        if ($request->file('gambar')) {
            if($request->gambarLama){
                Storage::delete($request->gambarLama);
            }
            $validateData ['gambar'] = $request->file('gambar')->store('gambar-post');
        }

        $validateData ['user_id'] = Auth::user()->id;
        $validateData ['preview'] = Str::limit(strip_tags($request->isi), 200);

        Post::where('id', $post->id)->update($validateData);

        return redirect('/mypost')->with('success', 'Post Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $post = Post::Where('slug', $slug)->first();

        if($post->gambar){
            Storage::delete($post->gambar);
        }
        Post::destroy($post->id);

        return redirect('/mypost')->with('success', 'Post Berhasil Dihapus');
    }
}
