<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    use HasFactory;
    private function rules()
    {
        return [
            'memo_no' => 'nullable',
            'user_id' => 'required',
            'patient_nid' => 'required',
            'contact' => 'nullable',
            'medicines' => 'nullable',
            'prescription_path' => 'nullable',
            'status' => 'nullable',
        ];
    }
}
