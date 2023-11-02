<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemoRequestLog extends Model
{
    use HasFactory;
    private function rules()
    {
        return [
            'request_id' => 'required',
            'from' => 'nullable',
            'to' => 'required',
            'user_id' => 'required',
        ];
    }

}
