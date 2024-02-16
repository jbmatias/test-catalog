<?php

namespace App\Enums;

enum MenuEnum
{
    public static function menus(): array
    {
        return [
            'TV' => [
                [
                    'name' => '55" Crystal UHD AU7002 4K Smart TV',
                    'price' => 500
                ],
                [
                    'name' => '70" Crystal UHD CU7000 4K Smart TV (2023)',
                    'price' => 1000
                ]
            ],
            'Washing Machine' => [
                [
                    'name' => '16.0 kg Twin Tub',
                    'price' => 400
                ],
                [
                    'name' => 'Laundry Top Load Washer WA15CG5745BVTC Ecobubble™ Technology 15 kg',
                    'price' => 600
                ]
            ],
            'Refrigerator'=> [
                [
                    'name' => 'LG New Smart Inverter™ with water dispenser, automatic ice maker, and ThinQ',
                    'price' => 1000
                ]               
            ]
        ];
    }
}
