<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyType extends BaseModel
{
    use HasFactory;
    protected $guarded = [];
    public function __construct()
    {
        $this->rules = [
            'name' => 'required',
            'slug' => 'required',
            'is_active' => 'required',
        ];
    }
}
