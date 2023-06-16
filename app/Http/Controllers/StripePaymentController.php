<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

use Cartalyst\Stripe\Stripe;

class StripePaymentController extends Controller
{
    public function paymentStripe(){
        return view('paymentForm');
    }

    public function postPaymentStripe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'card_no' => 'required',
            'cvv' => 'required',
            'ycvv' => 'required',
            'mcvv' => 'required',
            // 'amount' => 'required',
        ]);
 
        $input = $request->except('_token');
 
        if ($validator->passes()) { 
            $stripe = new \Stripe\StripeClient('sk_test_51NJPrxIwaO31y7Bi3ibeIsZ4V3l71aVkeGsKGR0tBjhrdYi6FM5vIPwBgECSr8PeBXgki6r5PBMmKc7XrAquPJW000qpc2kpXM');
             
            try {
            
                 
                $charge = $stripe->paymentIntents->create([
                    'confirm' => 'true',
                    'amount' => ($request->get('total')*100),
                    'currency' => 'MXN',
                    'payment_method' => 'pm_card_mastercard',
                  ]);
                 
                if($charge['status'] == 'succeeded') {
                    //Redirección exitosa, implementar alert
                    //SweetAlert
                    return redirect()->route('menuAlimentos')->with('pagado','pagado');
                } else {
                    return redirect()->route('paymentForm')->with('error','Money not add in wallet!');
                }
            } catch (Exception $e) {
                return redirect()->route('paymentForm')->with('error',$e->getMessage());
            } catch(\Cartalyst\Stripe\Exception\CardErrorException $e) {
                return redirect()->route('paymentForm')->with('error',$e->getMessage());
            } catch(\Cartalyst\Stripe\Exception\MissingParameterException $e) {
                return redirect()->route('paymentForm')->with('error',$e->getMessage());
            }
        }
    }
  
}
