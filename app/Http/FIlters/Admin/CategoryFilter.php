<?php

namespace App\Http\Filters\Admin;

use App\Http\Filters\AbstractFilter;
use Illuminate\Database\Eloquent\Builder;

class CategoryFilter extends AbstractFilter {

    public const SPHERE = 'sphere';
    public const TITLE = 'title';
    public const ACTIVE = 'active';


    /**
     * @return array[]
     */
    protected function getCallbacks(): array
    {
        return [

            self::SPHERE => [$this, 'sphere'],
            self::TITLE => [$this, 'title'],
            self::ACTIVE => [$this, 'active'],
        ];
    }

    /**
     * @param Builder $builder
     * @param $value
     * @return void
     */
    public function sphere(Builder $builder, $value): void
    {
        $builder->where('sphere_id', $value);
    }

    /**
     * @param Builder $builder
     * @param $value
     * @return void
     */
    public function title(Builder $builder, $value): void
    {
        $builder->where('title', 'like', '%' . $value . '%');
    }

    /**
     * @param Builder $builder
     * @param $value
     * @return void
     */
    public function active(Builder $builder, $value): void
    {
        $builder->where('active', $value);
    }

}
