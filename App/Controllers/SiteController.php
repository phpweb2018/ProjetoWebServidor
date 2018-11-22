<?php
namespace App\Controllers;

class SiteController extends Controller
{
    public function index()
    {
        $this->renderLadoCliente('Site/index');
    }
}