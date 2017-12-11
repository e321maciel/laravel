<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Book;
use App\Http\Controllers\Controller;

class BooksController extends Controller
{
  public function index() {<->}
  public function create(){<->}
   
  public function store()
  {
    $input = request()->input();
    $book = Book :: create ($input);
    
    if ($book)
      return redirect('books');
  }
    
}
