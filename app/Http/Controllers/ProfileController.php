<?php

namespace App\Http\Controllers;

use App\Models\Profiles;
use Illuminate\Http\Request;

class ProfileController extends BaseController
{
    public function __construct()
    {
        $this->model = Profiles::class;
        $this->relation=['subJobs'];
        $this->allowedFilters=['name'];
        $this->allowedIncludes=['subJobs'];
        $this->allowedSorts=['id'];
    }



}
