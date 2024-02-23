<?php

namespace App\Http\Traits;

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
            ->orderBy('title')
            ->get();
    }

}
