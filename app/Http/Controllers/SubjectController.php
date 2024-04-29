<?php

namespace App\Http\Controllers;

use App\Http\Transformers\SubjectTransformer;
use App\Models\Subject;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SubjectController extends Controller
{
    public function index()
    {
        return redirect()->route('index');
    }

    public function show(Subject $subject)
    {
        if ($subject->published_at === null) {
            abort(403, 'unauthorized.');
        }
        $subjectData = fractal($subject, new SubjectTransformer())->toArray();
        return Inertia::render('Subject/Show')->with([
            'subject' => $subjectData
        ]);
    }
}
