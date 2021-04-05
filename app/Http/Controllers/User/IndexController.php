<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller {

    public function __invoke(Request $request) {
        return view('user.open');
    }

    public function lock() {
        return view('user.lock');
    }
}
