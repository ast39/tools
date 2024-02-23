<?php

namespace App\Models;

use App\Http\Traits\Filterable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Category extends Authenticatable {

    use Filterable;


    protected $table         = 'categories';

    protected $primaryKey    = 'id';

    protected $keyType       = 'int';

    public    $incrementing  = true;

    public    $timestamps    = true;


    /**
     * @return BelongsTo
     */
    public function sphere(): BelongsTo
    {
        return $this->belongsTo(Sphere::class, 'sphere_id', 'id');
    }

    /**
     * @return HasMany
     */
    public function services(): HasMany
    {
        return $this->hasMany(Service::class, 'category_id', 'id');
    }


    /**
     * @param $query
     * @return mixed
     */
    public function scopeOnlyActive($query)
    {
        return $query->where('active', 1);
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
        'id', 'sphere_id', 'title', 'body', 'active',
        'created_at', 'updated_at',
    ];

    protected $hidden = [];
}
