<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pastel;

class PasteAddController extends Controller
{
    public function submit(Request $req) {
    $this->validate($req,[
    'name' =>'required|min:5',
    ,]);

    }
}
