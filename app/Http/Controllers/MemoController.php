<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Http\Request;

class MemoController extends BaseController
{
    public function __construct()
    {
        $this->model = Memo::class;
        $this->relation=[''];
        $this->allowedFilters=[''];
        $this->allowedIncludes=[''];
        $this->allowedSorts=['id'];
    }
}
