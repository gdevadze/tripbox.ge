<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdditionalService extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function translatedTitle(): Attribute
    {
        $title = '';
        if(currentLocale() == 'ka'){
            $title = $this->title_ka;
        }
        if(currentLocale() == 'en'){
            $title = $this->title;
        }
        if(currentLocale() == 'ru'){
            $title = $this->title_ru;
        }
        return new Attribute(
            get: fn($value) => $title
        );
    }
}
