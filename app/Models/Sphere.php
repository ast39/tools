<?php

namespace App\Models;

use App\Http\Traits\Filterable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Str;


class Sphere extends Authenticatable {

    use Filterable;


    protected $table         = 'spheres';

    protected $primaryKey    = 'id';

    protected $keyType       = 'int';

    public    $incrementing  = true;

    public    $timestamps    = true;


    public function seo(): MorphOne
    {
        return $this->morphOne(Seo::class, 'seoable', 'seoable_type', 'seoable_id', 'id');
    }

    /**
     * @return HasMany
     */
    public function categories(): HasMany
    {
        return $this->hasMany(Category::class, 'sphere_id', 'id')
            ->with('services');
    }


    /**
     * @param $query
     * @return mixed
     */
    public function scopeOnlyActive($query)
    {
        return $query->where('active', 1);
    }


    public static function boot()
    {
        parent::boot();

        self::saving(function ($model) {
            if (empty($model->slug)) {
                $model->slug = Str::slug($model->title, '-');
            }
        });
    }


    protected $with = [
        //
    ];

    protected $appends = [
       //
    ];

    protected $casts = [
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp',
    ];

    protected $fillable = [
        'id', 'title', 'slug', 'body', 'active', 'position',
        'created_at', 'updated_at',
    ];

    protected $hidden = [];
}
