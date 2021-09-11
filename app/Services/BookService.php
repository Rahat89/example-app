<?php

namespace App\Services;
use App\Contracts\BookInterface;
use App\Models\Book;
use Illuminate\Http\Request;

class BookService extends BaseService implements BookInterface {

    public function read($id)
    {
        if(!$this->isLoggedIn()){
            dump('Please login to read the book');
            return;
        }

        dump('You are logged in and can read the book now');
    }

    public function create(Request $request)
    {
        $data = $request->all();
        if($request->get('cover_photo')){
            $data['cover_photo'] = $this->uploadImage($request->get('cover_photo'));
        }
        return Book::create($data);
    }

    public function update(Book $book, Request $request)
    {
        return $book->update($request->all());
    }

    public function all()
    {
        return Book::all();
    }

    public function review($id, $review)
    {
        // TODO: Implement review() method.
    }
}
