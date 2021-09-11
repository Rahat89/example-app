<?php
namespace App\Services;

use App\Contracts\NotificationInterface;
use App\Contracts\PostInterface;
use App\Models\Post;
use Illuminate\Http\Request;

class PostService implements PostInterface {

    public function create(Request $request)
    {
        return Post::create($request->all());
    }

    public function update(Post $post, Request $request)
    {
        return $post->update($request->all());
    }

    public function all()
    {
        return Post::all();
    }

    public function comment($id, $user, $comment)
    {
        return 'hi';
    }

    public function read($id)
    {
        dump('You can read the post without login');
    }
}
