<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Admin\Controller;
use App\Http\Traits\Dictionarable;
use App\Models\Category;
use Illuminate\View\View;


/**
 * Страница сферы сантехники
 */
class PlumberController extends Controller {

    use Dictionarable;


    /**
     * Список категорий
     *
     * @return View
     */
    public function index(): View
    {
        $categories = Category::with('services')
            ->where('sphere_id', 2)
            ->orderBy('id')
            ->get();

        return view('web.plumber.index', [
            'categories' => $categories,
        ]);
    }
}
