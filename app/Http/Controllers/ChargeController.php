<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ChargeController extends Controller
{
    //
    public function index(){
        return view('stripe');
    }

    public function store(Request $request){
//        dd($request->all());
        $stripeToken=$request->get('stripe_token');
        $plan='price_1Gu5HiFqiq32mjNFBzHw67dN';
        $user=User::find(1);
        $user->newSubscription('main',$plan)->create($stripeToken);
    }
}
