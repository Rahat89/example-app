<?php
namespace App\Services;

use App\Contracts\NotificationInterface;
use App\Contracts\PostInterface;
use App\Models\Post;
use Illuminate\Http\Request;

class PostService extends BaseService implements PostInterface {

    public function create(Request $request)
    {
        $data = $request->all();
        if($request->get('cover_photo')){
            $data['cover_photo'] = $this->uploadImage($request->get('cover_photo'));
        }
        return Post::create($data);
    }

    public function update(Post $post, Request $request)
    {
        return $post->update($request->all());
    }

    public function all()
    {
        return collect([
            [
                'id' => 1,
                'title' => 'First post'
            ],
            [
                'id' => 2,
                'title' => 'Second post'
            ],
        ]);
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
