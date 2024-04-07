<?php

namespace App\Http\Filters\Admin;

use App\Http\Filters\AbstractFilter;
use Illuminate\Database\Eloquent\Builder;


class ImageFilter extends AbstractFilter {

    public const PATH = 'path';


    /**
     * @return array[]
     */
    protected function getCallbacks(): array
    {
        return [
            self::PATH => [$this, 'path'],
        ];
    }

    /**
     * @param Builder $builder
     * @param $value
     * @return void
     */
    public function path(Builder $builder, $value): void
    {
        $builder->where('path', 'like', '%' . $value . '%');
    }

}
