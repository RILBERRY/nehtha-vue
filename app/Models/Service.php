<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends BaseModel
{
    use HasFactory;
    protected $guarded =[];
    public function __construct()
    {
        $this->rules = [
            'name' => 'required',
            'description' => 'nullable',
            'is_active' => 'nullable',
        ];
    }
}
