<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $appends = [
        'date',
        'translated_title'
    ];

    public function cars()
    {
        return $this->hasMany(Car::class);
    }

    public function getDateAttribute()
    {
        return Carbon::parse($this->created_at)->format('d.m.Y H:i:s');
    }

    public function translatedTitle(): Attribute
    {
        $title = $this->title;
        if(currentLocale() == 'en'){
            $title = $this->title_en;
        }
        if(currentLocale() == 'ru'){
            $title = $this->title_ru;
        }
        return new Attribute(
            get: fn($value) => $title
        );
    }
}
