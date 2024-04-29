<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;

    protected $fillable = ['department_id', 'prefix', 'first_name', 'last_name'];

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }
}
