<?php

namespace App\Models;

use App\Http\Traits\Filterable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Str;


class Service extends Authenticatable {

    use Filterable;


    protected $table         = 'services';

    protected $primaryKey    = 'id';

    protected $keyType       = 'int';

    public    $incrementing  = true;

    public    $timestamps    = true;


    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id')
            ->with('sphere');
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
        'id', 'category_id', 'title', 'slug', 'price', 'unit', 'from', 'favorite', 'active',
        'created_at', 'updated_at',
    ];

    protected $hidden = [];
}
