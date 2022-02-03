<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funderaise;

class Step1Controller extends Controller
{
    public function step1()
    {
        return view('html.step1');
    }

    public function step2()
    {
        if (!request()->session()->has('region') && !request()->session()->has('category') ) {
            return view('html.step1');
        }

        //dd(request()->session()->all());
        return view('html.step2');
    }

    public function step3()
    {
        if (!request()->session()->has('title') && !request()->session()->has('description') ) {
            return view('html.step2');
        }
        return view('html.step3');
    }

    public function storeStep1(Request $request)
    {

        $request->session()->put('region', $request->region);
        $request->session()->put('category', $request->category);


        return redirect()->route('step2');

    }

    public function storeStep2(Request $request) {

        $request->session()->put('title', $request->title);
        $request->session()->put('description', $request->description);

        //dd($request->session()->all());
        return redirect()->route('step3');
        
    }

    public function storeStep3(Request $request) {


        //dd($request->session()->get('region'));
       $funderaise = new Funderaise();

       $funderaise->region = $request->session()->get('region');
       $funderaise->description = $request->session()->get('description');
       $funderaise->category = $request->session()->get('category');
       $funderaise->title = $request->session()->get('title');
       $funderaise->number = $request->number;
       $funderaise->file = $request->file;

       $funderaise->user_id = auth()->user()->id;
       $funderaise->save();

    
        return view('dashboard');
         
    }
}
