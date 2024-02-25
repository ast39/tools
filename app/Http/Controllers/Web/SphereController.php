<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Admin\Controller;
use App\Http\Traits\Dictionarable;
use App\Models\Category;
use App\Models\Sphere;
use Illuminate\Support\Str;
use Illuminate\View\View;


/**
 * Страница сфер
 */
class SphereController extends Controller {

    use Dictionarable;


    public function show(string $slug): View
    {
        $id = $this->getIdBySlug(new Sphere(), $slug);

        $sphere = Sphere::with('categories')->findOrFail($id);

        return view('web.sphere.show', [
            'sphere' => $sphere,
        ]);
    }
}
