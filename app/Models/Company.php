<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends BaseModel
{
    use HasFactory;
    protected $guarded = [];
    public function __construct()
    {
        $this->rules = $this->rules();
    }
    private function rules()
    {
        return [
            'name'=>'required',
            'registration_no'=>'nullable',
            'company_type_id'=>'required',
            'company_id'=>'nullable',
            'address'=>'required',
            'contact'=>'nullable',
            'long'=>'nullable',
            'lat'=>'nullable',
            'email'=>'required',
            'is_active'=>'nullable',
            'accept_bulk_request'=>'nullable',
        ];
    }
    protected $casts = [
        'address'=> 'json',
    ];
}
