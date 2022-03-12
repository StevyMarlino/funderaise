<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funderaise;
use App\Models\Donation;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'index' => Funderaise::paginate(6)->where('active',1)
        ];
        return view('index', $data);
       
    }

    public function details($id){

        $data = [
            'details' => Funderaise::find($id),
            'donations' => Donation::all()->where('project_id', $id)
        ];

        return view('html.details',$data);
    }
}
