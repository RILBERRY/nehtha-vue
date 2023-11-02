<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    private function rules()
    {
        return [
            'name'=>'required',
            'registration_no'=>'nullable',
            'company_type_id'=>'required',
            'contact'=>'nullable',
            'long'=>'nullable',
            'lat'=>'nullable',
            'email'=>'required',
            'is_active'=>'nullable',
            'accept_bulk_request'=>'nullable',
        ];
    }
}
