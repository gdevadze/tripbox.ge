<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $appends = [
        'date'
    ];
    protected $guarded = [];

    public function getDateAttribute()
    {
        return Carbon::parse($this->created_at)->format('d.m.Y H:i:s');
    }

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
