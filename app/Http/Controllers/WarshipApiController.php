<?php

namespace App\Http\Controllers;

use App\Models\Warship;
use Illuminate\Http\Request;

class WarshipApiController extends Controller
{
    public function index(){
        return [
            'warships'=>Warship::all()
        ];
    }
}
