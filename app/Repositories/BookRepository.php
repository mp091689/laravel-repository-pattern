<?php

namespace App\Repositories;

use App\Interfaces\BookRepositoryInterface;
use App\Models\Book;

class BookRepository implements BookRepositoryInterface
{

    public function all()
    {
        return Book::all();
    }

    public function get($id)
    {
        return Book::findOrFail($id);
    }

    public function delete($id)
    {
        Book::destroy($id);
    }

    public function create(array $data)
    {
        return Book::create($data);
    }

    public function update($id, array $newData)
    {
        return Book::whereId($id)->update($newData);
    }

    public function getUnread()
    {
        return Book::where('is_read', false);
    }
}
