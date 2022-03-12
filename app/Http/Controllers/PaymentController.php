<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funderaise;
use App\Models\Donation;

class PaymentController extends Controller
{
    public function successUrl()
    {

        $pay = Funderaise::find(request()->session()->get('projet_id'));

        $pay->amount_received = $pay->amount_received + request()->session()->get('amount') ;

       

        $donate = Donation::create([
            'name' => auth()->user()->name,
            'amount' => request()->session()->get('amount'),
            'project' => $pay->title,
            'project_id' => $pay->id
        ]);

        $pay->save();

        dd('success');
    }

    public function cancelUrl()
    {

        dd('cancel');
    }

    public function ipn()
    {
        dd(request());
    }
}
