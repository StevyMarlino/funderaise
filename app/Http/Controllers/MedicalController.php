<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funderaise;

class MedicalController extends Controller
{
    public function index()
    {
        $data = [
            'medical' => Funderaise::all()->where('category','Medical')
        ];
        return view('html.Medical', $data);
       
    }
}

