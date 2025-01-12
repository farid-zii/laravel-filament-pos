<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Customer extends Model
{
    protected $guarded=[];



    public function province():BelongsTo{
        return $this->belongsTo(Province::class);
    }

    public function regency():BelongsTo{
        return $this->belongsTo(Regency::class);
    }

    public function district():BelongsTo{
        return $this->belongsTo(District::class);
    }

    public function village():BelongsTo{
        return $this->belongsTo(Village::class);
    }
}
