<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funderaise;

class FundraiserController extends Controller
{
    public function index()
    {
        $data = [
            'fundraiser' => Funderaise::all()->where('active',1)
        ];
        return view('html.fundraiser', $data);
        
    }
}
