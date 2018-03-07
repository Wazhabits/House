<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Streamers;

class ViewController extends Controller
{
    public function Index() {
        return view('index', ['all' => Streamers::GetAll()]);
    }
}
