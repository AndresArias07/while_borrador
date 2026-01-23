<?php

namespace App\Controllers;

class HistoriaController extends BaseController
{
    public function index(): string
    {
        return view('layouts/historia');

    }
}
