<?php

namespace App\Http\Controllers\Admin;

class HomeController extends Controller {

    public function __construct()
    {
        $this->middleware('access.admin');
    }

    public function __invoke()
    {
        return view('admin.home');
    }
}
