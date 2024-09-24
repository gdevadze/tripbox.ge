<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderAdditionalService extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function additional_service(){
        return $this->belongsTo(AdditionalService::class);
    }
}
