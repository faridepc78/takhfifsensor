<?php

namespace App\Http\Controllers\Site;

use App\Api\Smsir\SendMessage2;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function home()
    {
        return view('site.home.index');
    }

    public function sendSms()
    {
        try {


            date_default_timezone_set("Asia/Tehran");

            // your sms.ir panel configuration
            $APIKey = "c94888d415d71123efe288d4";
            $SecretKey = "&SKCNOWIHD&*W^*c7d8&*DC&";
            $LineNumber = "30002189";

            // your mobile numbers
            $MobileNumbers = array('09162154221');

            // your text messages
            $Messages = array('text1');

            // sending date
            @$SendDateTime = date("Y-m-d")."T".date("H:i:s");

            $SmsIR_SendMessage = new SendMessage2($APIKey,$SecretKey,$LineNumber);
            $SendMessage = $SmsIR_SendMessage->SendMessage($MobileNumbers,$Messages,$SendDateTime);
            var_dump($SendMessage);

        } catch (Exeption $e) {
            echo 'Error SendMessage : '.$e->getMessage();
        }

        /*$t = new Test('c94888d415d71123efe288d4','&SKCNOWIHD&*W^*c7d8&*DC&','');
        return $t->SendMessage('09162154221','egdgsgsgsgsg');*/
//        $send = new SendMessage('c94888d415d71123efe288d4', '&SKCNOWIHD&*W^*c7d8&*DC&', 'https://ws.sms.ir/');
//        return $send->verificationCode('123456', '09162154221');
    }
}
