<?php

namespace App\Http\Controllers;

use App\Contracts\PostInterface;

class PostController extends Controller
{
    /**
     * @var PostInterface
     */
    private $postService;

    public function __construct(PostInterface $postInterface)
    {
        $this->postService = $postInterface;
    }

    public function all()
    {
        return $this->postService->all();
    }

    public function comment($id, $user, $comment)
    {
        return $this->postService->comment($id, $user, $comment);
    }

    public function readPost($id)
    {
        return $this->postService->read($id);
    }
}
