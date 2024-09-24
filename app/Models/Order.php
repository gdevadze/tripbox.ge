<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function order_details()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function order_additional_services()
    {
        return $this->hasMany(OrderAdditionalService::class);
    }


    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class)->with('brand','brand_model');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // public function location_from()
    // {
    //     return $this->location_from_id;
    // }

    // public function location_to()
    // {
    //     return $this->location_to_id;
    // }

    public function formattedDate(): Attribute
    {
        $fullName = Carbon::parse($this->created_at)->format('d.m.Y H:i');
        return new Attribute(
            get: fn($value) => $fullName
        );
    }
    
    public function formattedDateFrom(): Attribute
    {
        $fullName = Carbon::parse($this->date_from)->format('d.m.Y H:i');
        return new Attribute(
            get: fn($value) => $fullName
        );
    }
    
    public function formattedDateTo(): Attribute
    {
        $fullName = Carbon::parse($this->date_to)->format('d.m.Y H:i');
        return new Attribute(
            get: fn($value) => $fullName
        );
    }
}
