<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Exception;
use Instamojo;

class PayController extends Controller
{
    public function checkout()
    {
        return view('checkout');
    }

    public function pay(Request $request)
    {

        $api = new \Instamojo\Instamojo(
            config('services.instamojo.api_key'),
            config('services.instamojo.auth_token'),
            config('services.instamojo.url')
        );

        try {
            $response = $api->paymentRequestCreate(array(
                "purpose" => "shopAR",
                "amount" => $request->amount,
                "buyer_name" => "$request->buyer_name",
                "send_email" => true,
                "email" => "$request->email",
                "phone" => "$request->mobile_no",
                "redirect_url" => "http://127.0.0.1:8000/confirmation"
            ));

            $order = new Order;
            $order->buyer_name = $request->buyer_name;
            $order->product_name = $request->item_name;
            $order->email = $request->email;
            $order->mobile_no = $request->mobile_no;
            $order->address = $request->address;
            $order->price  = $request->price;
            $order->vendor_id = $request->vendor_id;
            $order->save();


            header('Location: ' . $response['longurl']);
            exit();
        } catch (Exception $e) {
            print('Error: ' . $e->getMessage());
        }
    }

    public function success(Request $request)
    {
        try {

            $api = new \Instamojo\Instamojo(
                config('services.instamojo.api_key'),
                config('services.instamojo.auth_token'),
                config('services.instamojo.url')
            );

            $response = $api->paymentRequestStatus(request('payment_request_id'));


            if (!isset($response['payments'][0]['status'])) {
                dd('payment failed');
            } else if ($response['payments'][0]['status'] != 'Credit') {
                dd('payment failed');
            }
        } catch (\Exception $e) {
            dd('payment failed');
        }
        dd($response);
    }
}
