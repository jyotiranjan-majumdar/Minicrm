<?php

namespace App\Http\Controllers;

use Stripe;

use Session;
use Stripe\Charge;
use Stripe\Customer;
use Illuminate\Http\Request;

class StripeController extends Controller
{
//

    public function call(Request $request) {
        \Stripe\Stripe::setApiKey('enter your stripe key');
        $customer = \Stripe\Customer::Create(array(
          'name' => 'test',
          'description' => 'test description',
          'email' => 'email@gmail.com',
          'source' => $request->input('stripeToken'),
           "address" => ["city" => "San Francisco", "country" => "US", "line1" => "510 Townsend St", "postal_code" => "98140", "state" => "CA"]

      ));
        try {
            \Stripe\Charge::Create ( array (
                    "amount" => 300 * 100,
                    "currency" => "usd",
                    "customer" =>  $customer["id"],
                    "description" => "Test payment."
            ) );
            Session::flash ( 'success-message', 'Payment done successfully !' );
            return view ( 'cardForm' );

        } catch ( \Stripe\Error\Card $e ) {
            Session::flash ( 'fail-message', $e->get_message() );
            return view ( 'cardForm' );
        }
    }
}

