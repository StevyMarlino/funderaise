<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funderaise;

class EducationController extends Controller
{
    public function index()
    {
        $data = [
            'education' => Funderaise::all()->where('category','Education')->where('active',1)
        ];
        return view('html.education',$data);
       
    }
}
