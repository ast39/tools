<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Admin\Controller;
use App\Http\Traits\Dictionarable;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\View\View;


/**
 * Страница сферы электрики
 */
class ElectricianController extends Controller {

    use Dictionarable;


    /**
     * Список категорий
     *
     * @return View
     */
    public function index(): View
    {
        echo Str::slug('Монтаж счетчика электроэнергии', '-', 'en');
        $categories = Category::with('services')
            ->where('sphere_id', 1)
            ->orderBy('id')
            ->get();

        return view('web.electrician.index', [
            'categories' => $categories,
        ]);
    }

    public function show(int $id): View
    {
        $category = Category::with('services')
            ->where('id', $id)
            ->orderBy('id')
            ->first();

        return view('web.electrician.show', [
            'category' => $category,
        ]);
    }
}
