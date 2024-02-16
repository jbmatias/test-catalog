<?php

namespace App\Actions;

use App\Models\Menu;
use Inertia\Inertia;
use Lorisleiva\Actions\Concerns\AsAction;

class IndexAction
{
    use AsAction;

    public function handle()
    {
        return Inertia::render('Index', [
            'menu' => Menu::with('items')->get()
        ]);
    }
}
