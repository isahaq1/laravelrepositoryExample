<?php

namespace App\Http\Controllers;

use App\Repositories\PostRepositoryInterface;
use Illuminate\Http\Request;
use TomShaw\GoogleApi\GoogleClient;

class PostController extends Controller
{
    private $postInterface;

    public function __construct(PostRepositoryInterface $postInterface)
    {
        $this->postInterface = $postInterface;
    }

    public function index()
    {

        $posts = $this->postInterface->all();
        return view('post.index', compact('posts'));
    }


    public function create()
    {

        return view('post.create');
    }

    public function store(Request $request)
    {
        $post = array(
            'name' => $request->name,
            'description' => $request->description,
        );
        $posts = $this->postInterface->store($post);
        return redirect('postslist');
    }
}
