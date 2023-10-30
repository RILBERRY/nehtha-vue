<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as MainController;

class Controller extends MainController
{
    use AuthorizesRequests, ValidatesRequests;
}
