<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wirausaha extends Model
{
    use HasFactory;

    protected $table = 'wirausaha'; // Table name
    protected $fillable = [
        'is_entrepreneur',
        'business_type',
        'business_name',
        'business_start',
        'business_reason',
        'business_reason_other',
        'business_funding',
        'business_funding_other',
        'business_progress',
        'business_obstacle',
        'business_obstacle_other',
        'entrepreneur_training',
        'entrepreneur_training_source',
        'business_plan',
        'business_plan_other',
        'business_support',
        'business_support_type',
        'business_support_type_other',
        'business_international',
        'business_goal',
        'business_goal_other',
        'has_employee',
        'employee_count',
        'business_tips',
        'user_id',
        ];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
