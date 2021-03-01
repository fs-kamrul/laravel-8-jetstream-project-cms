<?php

namespace Database\Seeders;

use App\Models\NavigationMenu;
use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::factory()->count(30)->create()
            ->each(function($nav_menu) {
                $nav_menu->navigation_menu()->save(
                    NavigationMenu::factory()->make()
                );
            });
    }
}
