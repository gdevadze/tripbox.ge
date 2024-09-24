<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use App\Enums\FuelType;

class Car extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = [
        'get_poster'
    ];
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function brand_model(): BelongsTo
    {
        return $this->belongsTo(BrandModel::class);
    }

    public function color(): BelongsTo
    {
        return $this->belongsTo(Color::class);
    }

    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable')->orderBy('sortable_key','asc');
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    
    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function getPoster(): Attribute
    {
        $img = 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/600px-No_image_available.svg.png';
        if($this->img){
            $img = asset('storage/images/cars/'.$this->img);
        }
        elseif ($this->images()->count()) {
            $img = asset('storage/images/cars/'.$this->images[0]->folder.'/'.$this->images[0]->url);
        }
        return new Attribute(
            get: fn($value) => $img
        );
    }
    
    public function transmissionTitle(): Attribute
    {
        return new Attribute(
            get: fn($value) => __($this->transmission)
        );
    }
    
    public function driveWheelsTitle(): Attribute
    {
        $title = '';
        if($this->drive_wheels == 'fore'){
            $title = __('front');
        }
        if($this->drive_wheels == 'back'){
            $title = __('back');
        }
        if($this->drive_wheels == '4x4'){
            $title = '4x4';
        }
        return new Attribute(
            get: fn($value) => $title
        );
    }

    public function fuelTypeTitle(): Attribute
    {
        $title = FuelType::getData($this->fuel_type);
        return new Attribute(
            get: fn($value) => $title
        );
    }
}
