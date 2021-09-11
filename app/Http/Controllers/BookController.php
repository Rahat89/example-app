<?php

namespace App\Http\Controllers;

use App\Contracts\BookInterface;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * @var BookInterface
     */
    private $bookService;

    public function __construct(BookInterface $bookService)
    {
        $this->bookService = $bookService;
    }

    public function readBook($id)
    {
        return $this->bookService->read($id);
    }

    public function all()
    {
        return $this->bookService->all();
    }
}
