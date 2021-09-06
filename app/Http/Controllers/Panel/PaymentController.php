<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Repositories\OrderRepository;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;

class PaymentController extends Controller
{
    private $orderRepository;
    private $hashids;

    public function __construct(OrderRepository $orderRepository,
                                Hashids $hashids)
    {
        $this->orderRepository = $orderRepository;
        $this->hashids = $hashids;
    }

    public function result(Request $request)
    {
        $price = 1000;        // Price Rial
        $ResNum = 10;            // Invoice Number
        $MerchantCode = "12573285";
        $RedirectURL = route('payment.verify');

        echo "<form id='samanpeyment' action='https://sep.shaparak.ir/payment.aspx' method='post'>
<input type='hidden' name='Amount' value='{$price}' />
<input type='hidden' name='ResNum' value='{$ResNum}'>
<input type='hidden' name='RedirectURL' value='{$RedirectURL}'/>
<input type='hidden' name='MID' value='{$MerchantCode}'/>
</form><script>document.forms['samanpeyment'].submit()</script>";


        /*$client = new Client();
        $res = $client->post('https://sep.shaparak.ir/Payment.aspx', [
            'Action' => 'token',
            'Amount' => '10000',
            'TerminalId' => '12573285',
            'MID' => '12573285',
            'RedirectUrl' => 'https://bni2021.com/category/spartacus-series/page/3',
            'CellNumber' => '09123456789',
            'ResNum' => '123456'
        ]);*/
        /*$client = new Client();
        $client->post('https://api.github.com/user', []);*/

        /*return Http::post('https://sep.shaparak.ir/Payment.aspx', [
            'Action' => 'token',
            'Amount' => '10000',
            'TerminalId' => '12573285',
            'MID' => '12573285',
            'RedirectUrl' => 'https://bni2021.com/category/spartacus-series/page/3',
            'CellNumber' => '09123456789',
            'ResNum' => '123456'
        ]);*/
        /*$order_id = $this->hashids::decode($request->get('order_id'))[0];
        $order = $this->orderRepository->findById($order_id);*/
//        return redirect('https://sep.shaparak.ir/Payment.aspx')->with('');
    }

    public function verify()
    {
        $MerchantCode = "12573285";

        if (isset($_POST['State']) && $_POST['State'] == "OK") {

            $soapclient = new soapclient('https://verify.sep.ir/Payments/ReferencePayment.asmx?WSDL');
            $res = $soapclient->VerifyTransaction($_POST['RefNum'], $MerchantCode);

            if ($res <= 0) {
                // Transaction Failed
                echo "Transaction Failed";
            } else {
                // Transaction Successful
                echo "Transaction Successful";
                echo "Ref : {$_POST['RefNum']}<br />";
                echo "Res : {$res}<br />";
            }
        } else {
            // Transaction Failed
            echo "Transaction Failed";
        }
    }
}
