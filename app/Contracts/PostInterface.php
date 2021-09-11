<?php
namespace App\Contracts;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

interface PostInterface extends ReadableInterface {
    /**
     * @param Request $request
     * @return mixed
     */
    public function create(Request $request);

    /**
     * @param Post $post
     * @param Request $request
     * @return mixed
     */
    public function update(Post $post, Request $request);

    /**
     * @return mixed
     */
    public function all();

    /**
     * @param $id
     * @param User $user
     * @param string $comment
     * @return mixed
     */
    public function comment($id, User $user, $comment);
}
