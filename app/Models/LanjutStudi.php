<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class LanjutStudi extends Model
{
    use HasFactory;

    protected $table = 'lanjut_studi'; // Define the table name if it's different from the model name

    // Mass assignable fields
    protected $fillable = [
        'user_id', 
        'plan_study',
        'study_location',
        'study_financed_by',
        'study_financed_by_other',
        'study_scholarship',
        'scholarship_type',
        'scholarship_type_other',
        'university_name',
        'study_program',
        'study_start_date',
    ];

    // Define relationships
    public function user()
    {
        return $this->belongsTo(User::class); // Assuming there's a User model
    }
}
