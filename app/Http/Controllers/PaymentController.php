<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funderaise;

class PaymentController extends Controller
{
    public function successUrl()
    {

        $pay = Funderaise::find(request()->session()->get('projet_id'));

        $pay->amount_received = $pay->amount_received + request()->session()->get('amount') ;

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
