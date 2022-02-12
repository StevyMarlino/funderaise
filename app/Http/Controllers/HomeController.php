<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funderaise;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'index' => Funderaise::paginate(6)
        ];
        return view('index', $data);
       
    }

    public function details($id){

        $data = [
            'details' => Funderaise::find($id)
        ];

        return view('html.details',$data);
    }
}
