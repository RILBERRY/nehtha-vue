<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends BaseController
{
    public function __construct()
    {
        $this->model = Company::class;
        $this->relation=[];
        $this->allowedFilters=['name'];
        $this->allowedIncludes=[];
        $this->allowedSorts=['id'];
    }
}
