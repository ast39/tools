<?php

namespace App\Models;

use App\Http\Traits\Filterable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Str;


class Seo extends Authenticatable {

    use Filterable;


    protected $table         = 'seo';

    protected $primaryKey    = 'id';

    protected $keyType       = 'int';

    public    $incrementing  = true;

    public    $timestamps    = true;


    public function seoable(): MorphTo
    {
        return $this->morphTo('seoable','seoable_type','seoable_id', 'id');
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
        'id', 'seo_title', 'seo_desc', 'seo_keys',
        'seoable_type', 'seoable_id',
        'created_at', 'updated_at',
    ];

    protected $hidden = [];
}
