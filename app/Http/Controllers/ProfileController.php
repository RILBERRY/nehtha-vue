<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends BaseController
{
    public function __construct()
    {
        $this->model = Profile::class;
        $this->relation=['subJobs'];
        $this->allowedFilters=['name'];
        $this->allowedIncludes=['subJobs'];
        $this->allowedSorts=['id'];
    }



}
