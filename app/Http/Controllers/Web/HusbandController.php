<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Admin\Controller;
use App\Http\Traits\Dictionarable;
use App\Models\Category;
use Illuminate\View\View;


/**
 * Страница сферы мужа на час
 */
class HusbandController extends Controller {

    use Dictionarable;


    /**
     * Список категорий
     *
     * @return View
     */
    public function index(): View
    {
        $categories = Category::with('services')
            ->where('sphere_id', 3)
            ->orderBy('id')
            ->get();

        return view('web.husband.index', [
            'categories' => $categories,
        ]);
    }
}
