<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Read Data Post
    public function tampil()
    {
        // query get data table post
        $data = Post::orderBy('id', 'ASC')->get();

        return view('post.index', compact('data'));
    }
    // Create Data Post
    public function simpan(Request $request)
    {
    $this->validate($request, [
        'judul' => 'required',
        'deskripsi' => 'required',
    ]);

    Post::create([
        'judul' => $request->judul,
        'deskripsi' => $request->deskripsi,
    ]);

    return redirect()->route('post.tampil')->with('success', 'Berhasil menambahkan data Post');
    }
    // Update Data Post

    // Delete Data Post
}
