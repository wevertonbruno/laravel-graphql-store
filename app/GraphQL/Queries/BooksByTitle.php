<?php

namespace App\GraphQL\Queries;

use App\Models\Book;

class BooksByTitle
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        return Book::where('title', 'like', "%$args[title]%")->get();
    }
}
