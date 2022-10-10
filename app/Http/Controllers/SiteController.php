<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('/');
    }

    public function send(Request $request)
    {
        try {
            $client = new \GuzzleHttp\Client();
            $url = 'https://api.loyverse.com/v1.0/customers';
            $response = $client->request('POST', $url, [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer 9112882d8417477d99176ac7eeb5e0bc',
                ],
                'body' => json_encode([
             
                    "name" => "Nweke",
                    "email" => "nweke98916@gmail.com",
                    "phone_number" => "2349065851596",
                    "address" => "No address",
                    "city" => "string",
                    "region" => "string",
                    "postal_code" => "string",
                    "country_code" => "NG",
                    "customer_code" => "077975",
                    "note" => "no note",
                    "total_points" => 3

                ])
            ]);
             Order::create([
                'order' => $response
            ]);
            
        } catch (\Throwable $th) {
            dd($th);
        }

    }

    public function recieve(){
        dd(Order::all());
    }
    public function subscribe(Request $request)
    {
        $request->session()->flash('message', 'You have succesfully subscribed to our news letter');
        return redirect('/');
    }

    public function contact(Request $request)
    {
        $request->session()->flash('message', 'Thanks for contacting us, we will get back to you shortly');
        return redirect('/');
    }
    public function notify(Request $request)
    {
        $request->session()->flash('message', 'Thanks. You will be notified whenever we lunch an App');
        return redirect('/');
    }
}
