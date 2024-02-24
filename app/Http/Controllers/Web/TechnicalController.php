<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Admin\Controller;
use App\Http\Traits\Dictionarable;
use App\Models\Category;
use Illuminate\View\View;


/**
 * Страница сферы ремонта техники
 */
class TechnicalController extends Controller {

    use Dictionarable;


    /**
     * Список категорий
     *
     * @return View
     */
    public function index(): View
    {
        $categories = Category::with('services')
            ->where('sphere_id', 4)
            ->orderBy('id')
            ->get();

        return view('web.technical.index', [
            'categories' => $categories,
        ]);
    }
}