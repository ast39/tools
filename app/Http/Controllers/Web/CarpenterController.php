<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Admin\Controller;
use App\Http\Traits\Dictionarable;
use App\Models\Category;
use Illuminate\View\View;


/**
 * Страница сферы плотничества
 */
class CarpenterController extends Controller {

    use Dictionarable;


    /**
     * Список категорий
     *
     * @return View
     */
    public function index(): View
    {
        $categories = Category::with('services')
            ->where('sphere_id', 7)
            ->orderBy('id')
            ->get();

        return view('web.carpenter.index', [
            'categories' => $categories,
        ]);
    }
}
