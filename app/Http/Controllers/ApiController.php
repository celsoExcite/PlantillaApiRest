<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //Todos los controladores api extemderán de éste mismo

    use ApiResponser;
}
