<?php

namespace App\Controllers;

class MensajesController extends BaseController
{
    public function index(): string
    {
        return view('layouts/mensajes.php');
    }
}
