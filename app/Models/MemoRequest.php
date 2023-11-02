<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemoRequest extends Model
{
    use HasFactory;
    private function rules()
    {
        return [
            'memo_id' => 'required',
            'company_id' => 'required',
            'request_no' => 'nullable',
            'status' => 'nullable',
            'medicines' => 'nullable',
        ];
    }
}
