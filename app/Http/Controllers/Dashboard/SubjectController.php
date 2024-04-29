<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
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
        return Inertia::render('Dashboard/Subject/Create')->with([]);
    }
}
