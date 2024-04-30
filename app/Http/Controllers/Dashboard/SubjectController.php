<?php

namespace App\Http\Controllers\Dashboard;

use App\Actions\Dashboard\SaveSubjectAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\CreateOrUpdateSubjectRequest;
use App\Http\Transformers\ProfessorTransformer;
use App\Http\Transformers\SubjectTransformer;
use App\Models\Professor;
use App\Models\Subject;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::orderBy('published_at', 'desc')->paginate(20);
        $subjectData = fractal($subjects, new SubjectTransformer())->includeImage()->toArray();
        return Inertia::render('Dashboard/Subject/Index')->with([
            'subjects' => $subjectData
        ]);
    }

    public function create()
    {
        $professors = Professor::all();
        $professorData = fractal($professors, new ProfessorTransformer())->includeImage()->toArray()['data'];
        return Inertia::render('Dashboard/Subject/Create')->with([
            'professors' => $professorData
        ]);
    }

    public function store(CreateOrUpdateSubjectRequest $request, SaveSubjectAction $action)
    {
        $newSubject = $action->execute(new Subject(), $request->validated());
        $newSubjectData = fractal($newSubject, new SubjectTransformer())->includeImage()->includeDocuments()->toArray();
        return redirect()->route('dashboard.subjects.index');
    }
}
