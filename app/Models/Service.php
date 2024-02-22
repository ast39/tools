<?php

namespace App\Models;

use App\Http\Traits\Filterable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Service extends Authenticatable {

    use Filterable;


    protected $table         = 'dict_services';

    protected $primaryKey    = 'service_id';

    protected $keyType       = 'int';

    public    $incrementing  = true;

    public    $timestamps    = true;


    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
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
        'service_id', 'category_id', 'title', 'body', 'favorite', 'active',
        'created_at', 'updated_at',
    ];

    protected $hidden = [];
}
