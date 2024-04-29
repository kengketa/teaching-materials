<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_th',
        'name_en',
        'code',
        'description',
        'unit',
        'published_at',
        'view',
    ];
    protected $casts = [
        'published_at' => 'datetime',
        'view' => 'integer',
    ];

    public function professors()
    {
        return $this->belongsToMany(Professor::class);
    }
}
