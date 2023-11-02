<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemoRequestRemark extends Model
{
    use HasFactory;
    private function rules()
    {
        return [
            'memo_request_id' => 'required',
            'remark' => 'required',
            'user_id' => 'required',
        ];
    }
}
