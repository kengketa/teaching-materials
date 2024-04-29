<?php

namespace App\Http\Transformers;


use App\Models\Professor;
use App\Models\Subject;
use Carbon\Carbon;
use League\Fractal\TransformerAbstract;

class ProfessorTransformer extends TransformerAbstract
{

    public function transform(Professor $professor): array
    {
        $data = [
            'id' => $professor->id,
            'department' => fractal($professor->department, new DepartmentTransformer())->toArray(),
            'prefix' => $professor->prefix,
            'first_name' => $professor->first_name,
            'last_name' => $professor->last_name,
        ];
        return $data;
    }


}
