<?php

namespace App\Repositories;


use App\Models\Post;

class PostRepository implements PostRepositoryInterface
{
    public function all()
    {
        return Post::all();
    }
    public function get($id)
    {
        return Post::find($id);
    }
    public function store(array $data)
    {
        return Post::create($data);
    }
    public function update($id, array $data)
    {
        return Post::find($id)->update($data);
    }
    public function delete($id)
    {
        return Post::destroy($id);
    }
}
