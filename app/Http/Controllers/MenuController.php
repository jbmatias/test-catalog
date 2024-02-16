<?php

namespace App\Http\Controllers;

use App\Actions\CheckoutAction;
use App\Actions\IndexAction;
use Illuminate\Http\Request;


class MenuController extends Controller
{
    public function index()
    {
        return IndexAction::run();
    }   

    public function checkout()
    {
        return CheckoutAction::run();
    }
}
