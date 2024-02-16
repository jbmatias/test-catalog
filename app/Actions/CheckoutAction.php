<?php

namespace App\Actions;

use Inertia\Inertia;
use Lorisleiva\Actions\Concerns\AsAction;

class CheckoutAction
{
    use AsAction;

    public function handle()
    {
        return Inertia::render('Cart/Checkout');
    }
}
