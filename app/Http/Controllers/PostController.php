<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        $category = Category::all();
        return view('post.create', compact('category'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'artikel' => 'required',
            'cover' => 'required|image',
            'category' => 'required'
        ]);

        $image = $request->file('cover');
        $file_name = $request->title .'-'. time() . '.' . $image->getClientOriginalExtension();
        $request->cover->move(public_path('img/cover_artikel'), $file_name);
        $user = Auth::user()->id;
        Post::create([
            'title' => $request->title,
            'body' => $request->artikel,
            'cover' => $file_name,
            'user_id' => $user,
            'category_id' => $request->category
        ]);

        return redirect()->back()->withSuccess('Publised Success');
    }

    public function index()
    {
        $post = Post::all();
        $category = Category::all();
        $user = User::all();
        return view('post.index', compact('post', 'category', 'user'));
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $category = Category::all();
        return view('post.edit', compact('post','category'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $user = Auth::user()->id;

        $file_baru = $request->file('cover');

        if (!empty($file_baru)){
            $file_baru_name = $request->title .'-'. time() . '.' . $file_baru->getClientOriginalExtension();
            $request->cover->move(public_path('img/cover_artikel'), $file_baru_name);

            $file_lama = Post::find($id);
            if (!empty($file_lama)){
                $file_path = public_path() . 'img//cover_artikel/' . $file_lama->cover;

                if (is_file($file_path)){
                    unlink($file_path);
                }
                if (!empty($file_baru)){
                    $post->update([
                        'title' => $request->title,
                        'body' => $request->artikel,
                        'cover' => $file_baru_name,
                        'user_id' => $user,
                        'category_id' => $request->category
                    ]);
                }else{
                    $post->update([
                        'title' => $request->title,
                        'body' => $request->artikel,
                        'user_id' => $user,
                        'category_id' => $request->category
                    ]);
                }
            }
        }else{
            $post->update([
                'title' => $request->title,
                'body' => $request->artikel,
                'user_id' => $user,
                'category_id' => $request->category
            ]);
        }
        return redirect(route('post.index'));
    }

    public function delete(Post $id)
    {

        $post = Post::find($id)->first();
        $file_path = public_path() . '/img//cover_artikel/' . $post->cover;

        if (is_file($file_path)){
            $img_delete = unlink($file_path);
            if (isset($img_delete)){
                $post->delete();
            }
        }else{
            $post->delete();
        }

        return redirect()->back();
    }



}