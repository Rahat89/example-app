<?php

namespace App\Contracts;

use App\Models\Book;
use Illuminate\Http\Request;

interface BookInterface extends ReadableInterface {
    /**
     * @param Request $request
     * @return mixed
     */
    public function create(Request $request);

    /**
     * @param Book $book
     * @param Request $request
     * @return mixed
     */
    public function update(Book $book, Request $request);

    /**
     * @param $id
     * @param $review
     * @return mixed
     */
    public function review($id, $review);
}
