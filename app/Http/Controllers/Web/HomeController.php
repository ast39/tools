<?php

namespace App\Http\Controllers\Web;

use App\Http\Traits\Dictionarable;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller {

    use Dictionarable;

    public function __invoke()
    {
        return view('web.home', [
            'categories' => $this->categoryList(),
            'spheres' => $this->sphereList()
        ]);
    }
}
