<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    
    public function index()
    {

        return response()->json([message]);

    }

}
