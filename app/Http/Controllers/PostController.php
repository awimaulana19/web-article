<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{

    public function dashboard(){
        return view('dashboard.MainLayoutAdmin', [
            "title" => "Dashboard"
        ]);
    }

    public function index(){
        return view('home', [
            "title" => "Home",
            "active" => "home"
        ]);
    }

    public function tentang(){
        return view('about', [
            "name" => "Awi Maulana",
            "email" => "awimaulana19@gmail.com",
            "image" => "img/awi.jpg",
            "title" => "About",
            "active" => "about"
        ]);
    }

    public function postingan(){

    $post = Post::latest();

        if(request('search')) {
            $post->where('judul', 'like', '%' . request('search') . '%');
        }

        return view('blog', [
            "title" => "All Post",
            "active" => "post",
            "post" => $post->get()
        ]);
    }

    public function temu(Post $post){
        return view('fullpost', [
            "title" => "Post",
            "active" => "post",
            "posting" => $post
        ]);
    }
    
    public function category(Category $kate){
        return view('blog', [
            "title" => "Post By Category : $kate->name",
            "active" => "post",
            "post" => $kate->post->load('user', 'category'),
            "kategori" => $kate->name
        ]);
    }

    public function user(User $akun){
        return view('blog', [
            "title" => "Post By Author : $akun->name",
            "active" => "post",
            "post" => $akun->post->load('user', 'category'),
            "nama" => $akun->name
        ]);
    }

}



