<?php

namespace App\Imports;


use App\Models\MockQuestion;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MockTestImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new MockQuestion([
            'section' => $row['section'],
            'question_text' => $row['question_text'],
            'option_a' => $row['option_a'],
            'option_b' => $row['option_b'],
            'option_c' => $row['option_c'],
            'option_d' => $row['option_d'],
            'correct_option' => $row['correct_option'],
        ]);
    }
}