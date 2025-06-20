<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
   
    protected $fillable = [
    'name', 'email', 'phone', 'dob',
    'country', 'course', 'level', 'intake_year', 'intake_season',
    'current_education', 'institution', 'gpa', 'grad_year',
    'budget', 'english_level', 'test_scores', 'passport', 'message', 'newsletter',
];

}
