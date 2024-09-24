<?php

namespace App\Enums;

class FuelType extends BaseEnum
{
    const HYBRID = 'hybrid';
    const DIESEL = 'diesel';
    const PETROL = 'petrol';
    const ELECTRIC = 'electric';
    const PLUG_IN_HYBRID = 'plug_in_hybrid';
    const BUN_AIR = 'bun_air';
    const TXE_AIR = 'txe_air';


    public static function all(): array {
        return [
            ['key' => self::HYBRID, 'title' => __('hybrid')],
            ['key' => self::DIESEL, 'title' => __('diesel')],
            ['key' => self::PETROL, 'title' => __('petrol')],
            ['key' => self::ELECTRIC, 'title' => __('electric')],
            ['key' => self::PLUG_IN_HYBRID, 'title' => __('plug_in_hybrid')],
            ['key' => self::BUN_AIR, 'title' => __('bun_air')],
            ['key' => self::TXE_AIR, 'title' => __('txe_air')],
        ];
    }
}
