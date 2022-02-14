<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function requestCurl(Request $request)
    {

      $request->session()->put('amount', $request->amount);

        $data = [
            'amount' => $request->amount,
            'currency_code' => 'XAF',
            'lang' => 'en',
            'item_ref' => rand(4,7),
            'item_name' => 'DONATION SERVICES',
            'email' => auth()->user()->email,
            //'phone' => '+237671326486',
            'public_key' => 'PK_t1L8v1Hap9laSym7M1zA',
            'logo' => 'https://paymooney.com/images/logo_paymooney2.png',
            'environement' => 'test'
        ];
    
    //Generer le Payment URL
    $curl = curl_init();
    
    curl_setopt_array($curl, [
      CURLOPT_URL => 'https://www.paymooney.com/api/v1.0/payment_url',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      //    CURLOPT_HTTPHEADER => "",
      CURLOPT_POSTFIELDS => $data,
    ]);
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    
    //Récuperer le payment URL
    $rep=json_decode($response);
    
  
    //Appel de l'API
     if($rep->response=="success"){
       return redirect($rep->payment_url);  //redirect permet de rediriger sur laravel. En Php pure, utilsez la fonction 'header'
     }


    return response()->json($rep, 200);
    
    }

}
