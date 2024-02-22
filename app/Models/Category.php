<?php

namespace App\Models;

use App\Http\Traits\Filterable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Category extends Authenticatable {

    use Filterable;


    protected $table         = 'dict_categories';

    protected $primaryKey    = 'category_id';

    protected $keyType       = 'int';

    public    $incrementing  = true;

    public    $timestamps    = true;


    /**
     * @return HasMany
     */
    public function services(): HasMany
    {
        return $this->hasMany(Service::class, 'category_id', 'category_id');
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
        'category_id', 'title', 'body', 'active',
        'created_at', 'updated_at',
    ];

    protected $hidden = [];
}
