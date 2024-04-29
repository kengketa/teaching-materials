<?php

namespace App\Http\Transformers;


use App\Models\Subject;
use Carbon\Carbon;
use League\Fractal\TransformerAbstract;

class SubjectTransformer extends TransformerAbstract
{

    public function transform(Subject $subject): array
    {
        $data = [
            'id' => $subject->id,
            'name_th' => $subject->name_th,
            'name_en' => $subject->name_en,
            'code' => $subject->code,
            'view' => $subject->view,
            'unit' => $subject->unit,
            'description' => $subject->description,
            'professors' => fractal($subject->professors, new ProfessorTransformer())->toArray()['data'],
            'published_at' => $subject->published_at ? Carbon::parse($subject->published_at)->thaidate('j M Y') : null
        ];
        return $data;
    }


}
