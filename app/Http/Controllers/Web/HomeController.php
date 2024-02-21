<?php

namespace App\Http\Controllers\Web;

use Illuminate\Support\Facades\Hash;

class HomeController extends Controller {

    public function __invoke()
    {
        return view('web.home');
    }
}
