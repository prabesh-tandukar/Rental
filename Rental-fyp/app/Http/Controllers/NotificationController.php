<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function notify()
    {
        $basic  = new \Vonage\Client\Credentials\Basic("d6eec8aa", "XqGGmq628wadMBRI");
        $client = new \Vonage\Client($basic);

        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS('977' . User::find($findId)->contact, $owner, 'Your total rent for the month of ' . $month . ' is ' . $total . '. Please pay it as soon as possible')
        );

        $message = $response->current();

        if ($message->getStatus() == 0) {
            return redirect()->route('landlord.bills.index')->with('success', 'Sms sent to the tenant successfully');
        } else {
            echo "The message failed with status: " . $message->getStatus() . "\n";
        }
    }
    public function show($id)
    {

        $basic  = new \Vonage\Client\Credentials\Basic("d6eec8aa", "XqGGmq628wadMBRI");
        $client = new \Vonage\Client($basic);

        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS('977' . User::find($findId)->contact, $owner, 'Your  rent is due for this month. Please pay it as soon as possible')
        );

        $message = $response->current();

        if ($message->getStatus() == 0) {
            return redirect()->route('landlord.bills.index')->with('success', 'Sms sent to the tenant successfully');
        } else {
            echo "The message failed with status: " . $message->getStatus() . "\n";
        }
    }
}
