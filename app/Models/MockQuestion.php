<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MockQuestion extends Model
{
    protected $fillable = [
        'section',
        'question_text',
        'option_a',
        'option_b',
        'option_c',
        'option_d',
        'correct_option',
    ];
}
