<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Admin\Controller;
use App\Http\Traits\Dictionarable;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\View\View;


/**
 * Страница категорий
 */
class CategoryController extends Controller {

    use Dictionarable;


    public function show(string $sphere, string $category): View
    {
        $id = $this->getCategoryIdBySlug($category);

        $category = Category::with('services')
            ->findOrFail($id);

        return view('web.category.show', [
            'category' => $category,
        ]);
    }
}
