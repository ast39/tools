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
     * ID сущности по слагу
     *
     * @param Model $model
     * @param string $slug
     * @return int|null
     */
    private function getIdBySlug(Model $model, string $slug):? int
    {
        return $model::where('slug', $slug)
            ->select('id')
            ->first()
            ?->id;
    }

}
