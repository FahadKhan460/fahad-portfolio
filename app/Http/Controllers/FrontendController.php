<?php

declare(strict_types=1);

namespace App\Http\Controllers;

final class FrontendController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function download() {}
}
