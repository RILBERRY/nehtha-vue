<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyType extends BaseModel
{
    use HasFactory;
    protected $guarded = [];
    private function rules()
    {
        return [
            'name' => 'required',
            'slug' => 'required',
            'is_active' => 'required',
        ];
    }
}
