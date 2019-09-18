<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    public function index(){
        return view('Posts', ["posts" => Post::all()]);
    }
    public function create(Request $request){
        $postData = $request->only(["title","content","likes"]);
            Post::create($postData);
        
        return view('createpost');
        
        
    }
    public function editpost($id){
        $post = Post::where('id', $id)->first();
        return view('updatepost', compact('post'));
    }
    public function update($id, Request $request){
   
        $postData = $request->only(["title","content","likes"]);
        $post = Post::where('id', $id)->first();
        $post->title = $postData['title'];
        $post->content = $postData['content'];
        $post->likes = $postData['likes'];
        
        $post->save();
        return redirect('/posts');
}

public function unisti($id, Request $request) {

    //$post = Post::where('id', $id)->first();
    $post = Post::findOrFail($id);
    if ($post != null){
    $post->delete();
    }

    return redirect('/posts');
}
public function like($id){

    $post = Post::find($id);
    $post->likes+= 1;
    $post->save();

    return redirect('/posts');
}

}