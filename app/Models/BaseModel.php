<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    use HasFactory;
    protected $rules;
    protected $guarded = [];
    protected $dataCol;


    public function storeRules()
    {
        return $this->rules;

    }
    public function updateRules()
    {
        array_merge($this->rules, []);
        foreach ($this->rules as $field => $rule) {
            $this->rules[$field] = ['sometimes', $rule];
        }

        return $this->rules;
    }

}
