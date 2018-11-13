<?php

namespace App\Controllers;

use App\Models\Entidades\Ticket;

class KanbanController extends Controller
{
    public function index()
    {
        
        $this->render('kanban/index');
    }
}