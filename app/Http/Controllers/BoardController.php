<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Board;

class BoardController extends Controller
{
    // p.77 라우트명의 관례

    public function index() {
      return view('board/index');
    }
    public function create() {
      return view('board/create');
    }
    public function store(Request $req) {
      $board = new Board([
        'title' => $req->input("title"),
        'ctnt' => $req->input("ctnt"),
        'hits' => 0
      ]);
      $board->save();
      return redirect('/boards');
    }
    public function show() {
      return view('board/show');
    }
}
