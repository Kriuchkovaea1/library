<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Controllers\Controller;
use App\Service\Book\BookService;

class BaseController extends Controller
{

    public BookService $service;
    public function __construct(BookService $service){
        $this->service = $service;
    }
}
