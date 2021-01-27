<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chanel;
use App\Models\Config;
class ApiController extends Controller
{
    
    public function index()
    {        
        /** */
        return Chanel::all();
        
    }
    public function config()
    {        
        /** */
        return Config::all();
    }        
    
}
