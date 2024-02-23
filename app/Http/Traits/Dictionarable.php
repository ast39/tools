<?php

namespace App\Http\Traits;

use App\Models\Category;
use App\Models\Sphere;
use Illuminate\Database\Eloquent\Collection;


trait Dictionarable {

    /**
     * Все сферы
     *
     * @return Collection
     */
    private function sphereList(): Collection
    {
        return Sphere::query()
            ->onlyActive()
            ->orderBy('id')
            ->get();
    }

    /**
     * Все категории
     *
     * @return Collection
     */
    private function categoryList(): Collection
    {
        return Category::query()
            ->onlyActive()
            ->orderBy('id')
            ->get();
    }

}
