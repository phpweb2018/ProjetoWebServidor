<?php

namespace App\Controllers;

class PrincipalController extends Controller
{
    public function index()
    {
        $this->render('Principal/index');
    }
}