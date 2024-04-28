<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Applicant extends Model
{
    use HasFactory;
    use InteractsWithMedia;

    public const MEDIA_COLLECTION_DOCUMENTS = 'documents';

    protected $fillable = [
        'user_id',
        'announcement_id',
        'prefix',
        'first_name',
        'last_name',
        'address',
        'birth_date',
        'age',
        'phone',
        'birth_place',
        'race',
        'citizen_id',
        'marital_status',
        'nationality',
        'district',
        'province',
        'card_issued_date',
        'card_expiration_date',
        'military_service',
        'religion',
        'current_occupation',
        'reason_for_leaving',
        'additional_course',
        'additional_training',
        'achievements',
        'experience_gained',
        'talent',
        'trainings',
        'experiences',
        'references'
    ];
    protected $casts = [
        'user_id' => 'integer',
        'announcement_id' => 'integer',
        'birth_date' => 'date',
        'age' => 'integer',
        'card_issued_date' => 'date',
        'card_expiration_date' => 'date',
        'trainings' => 'json',
        'experiences' => 'json',
        'references' => 'json'
    ];


    public function registerMediaCollections(): void
    {
        $this->addMediaCollection(self::MEDIA_COLLECTION_DOCUMENTS);
    }

    public function announcement()
    {
        return $this->belongsTo(Announcement::class, 'announcement_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
