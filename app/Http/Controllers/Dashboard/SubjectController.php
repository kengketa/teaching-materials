<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Transformers\ProfessorTransformer;
use App\Models\Professor;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SubjectController extends Controller
{
    public function index()
    {
        return Inertia::render('Dashboard/Subject/Index')->with([]);
    }

    public function create()
    {
        $professors = Professor::all();
        $professorData = fractal($professors, new ProfessorTransformer())->includeImage()->toArray()['data'];
        return Inertia::render('Dashboard/Subject/Create')->with([
            'professors' => $professorData
        ]);
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
