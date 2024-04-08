<?php

namespace App\Http\Traits;

use App\Models\Category;
use App\Models\Sphere;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;


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

    /**
     * ID сферы по слагу
     *
     * @param string $slug
     * @return int|null
     */
    private function getSphereIdBySlug(string $slug):? int
    {
        return Sphere::where('slug', $slug)
            ->select('id')
            ->first()
            ?->id;
    }

    /**
     * ID категории по слагу
     *
     * @param string $slug
     * @return int|null
     */
    private function getCategoryIdBySlug(string $slug):? int
    {
        return Category::where('slug', $slug)
            ->select('id')
            ->first()
            ?->id;
    }

}
