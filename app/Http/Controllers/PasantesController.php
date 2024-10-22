<?php

namespace App\Http\Controllers;

use App\Models\Pasantes;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PasantesController extends Controller
{
    public function index() 
    {
        $pasantes = Pasantes::get();

        logger('$pasantes', [$pasantes]);

        return Inertia::render('Admin/Pasantes', [
            'pasantes' => $pasantes
        ]);
    }
}
