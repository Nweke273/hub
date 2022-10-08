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

    public function send(Request $request){
        try {
            $client = new \GuzzleHttp\Client();
            $url = 'https://api.loyverse.com/v1.0/receipts';
            $response = $client->request('POST', $url, [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer 9112882d8417477d99176ac7eeb5e0bc',
                ],
                'body' => json_encode([
                    "store_id" => "42dc2cec-6f40-11ea-bde9-1269e7c5a22d",
                    "order" => "ORDER-103885",
                    "customer_id" => str::uuid("34228379"),
                    "source" => "My app",
                    "receipt_date" => "2020-06-23T08:35:47.047Z",
                    "total_discounts" => [
                        [
                            "id" => "50f4e245-d221-448d-943a-7346c21cd82b",
                            "percentage" => 15,
                            "scope" => "LINE_ITEM"
                        ],
                        [
                            "id" => "23a64c4f-c6e5-43cc-a017-b11a6ee32448",
                            "scope" => "RECEIPT"
                        ],
                        [
                            "id" => "77d2bf40-7b12-11ea-bc55-0242ac130003",
                            "money_amount" => 5,
                            "scope" => "RECEIPT"
                        ],
                    ],
                    "line_items" => [
                        [
                            "variant_id" => "06929667-cc44-4bbb-b226-6758285d7033",
                            "quantity" => 2
                        ],
                        [
                            "variant_id" => "706e2626-3329-45f8-98d7-0e1dbcbcb9d9",
                            "quantity" => 1,
                            "price" => 100,
                            "cost" => 50,
                            "line_note" => "Some line note",
                            "line_discounts" => [
                                [
                                    "id" => "50f4e245-d221-448d-943a-7346c21cd82b"
                                ],
                            ],
                            "line_taxes" => [
                                [
                                    "id" => "a94d8606-7268-11ea-bde9-1269e7c5a22d"
                                ],
                                [
                                    "id" => "365972a1-d5f9-449d-bc61-4328cf0e62cb"
                                ]
                            ],
                            "line_modifiers" => [
                                [
                                    "modifier_option_id" => "0a7cdf41-c75b-11ea-f4ff-abc85f017314",
                                    "price" => 2
                                ]
                            ]
                        ]
                    ],
                    "note" => "Some note for the receipt",
                    "payments" => [
                        [
                            "payment_type_id" => "42dd2a55-6f40-11ea-bde9-1269e7c5a22d",
                            "paid_at" => "2020-06-10T19:16:46Z"
                        ]
                    ]
                        ])
            ]);
    } catch (\Throwable $th) {
        dd($th);
    }
            
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
