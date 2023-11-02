<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyService extends Model
{
    use HasFactory;
    private function rules()
    {
        return [
            'company_id'=> 'required',
            'service_name'=> 'required',
            'is_active'=> 'nullable',
        ];
    }
}
