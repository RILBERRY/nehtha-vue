<?php

namespace App\Http\Controllers;

use App\Models\CompanyType;
use Illuminate\Http\Request;

class CompanyTypeController extends BaseController
{
    public function __construct()
    {
        $this->model = CompanyType::class;
        $this->relation=[];
        $this->allowedFilters=['name'];
        $this->allowedIncludes=[];
        $this->allowedSorts=['id','is_active'];
    }
}
