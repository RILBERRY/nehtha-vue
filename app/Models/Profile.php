<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends BaseModel
{
    use HasFactory;
    protected $guarded = [];
    private function rules()
    {
        return [
            'type' => 'nullable',
            'status' => 'required',
            'user_id' => 'required',
        ];
    }

}
