<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funderaise;

class MedicalController extends Controller
{
    public function index()
    {
        $data = [
            'medical' => Funderaise::all()->where('category','Medical')->where('active',1)
        ];
        return view('html.Medical', $data);
       
    }
}

