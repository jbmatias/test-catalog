<?php

namespace Database\Seeders;

use App\Enums\MenuEnum;
use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (MenuEnum::menus() as $key => $value) {
            
            $menu = Menu::create([
                'name' => $key
            ]);

            $menu->items()->createMany($value);
        }
    }
}
