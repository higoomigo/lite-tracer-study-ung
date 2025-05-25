<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pekerjaan extends Model
{

    use HasFactory;
    protected $table = 'pekerjaan'; // Define the table name (optional if it's the same as the model name in plural form)

    protected $fillable = [
        'employed',
        'industry',
        'job_status',
        'monthly_salary',
        'job_location',
        'waiting_time',
        'job_choice_factor',
        'ever_employed',
        'last_job_title',
        'last_company',
        'reason_left',
        'current_activity',
        'never_employed_reason',
        'never_employed_looking',
        'never_employed_business',
        'desired_industry',
        'plan_study',
        'has_business',
        'business_name',
        'interest_return_school',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class); // Assuming there's a User model
    }
}
