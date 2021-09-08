<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Repositories\OrderRepository;
use Illuminate\Http\Request;
use Shetabit\Multipay\Invoice;
use Vinkla\Hashids\Facades\Hashids;
use Shetabit\Payment\Facade\Payment;

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

    public function purchase(Request $request)
    {
        $order_id = $this->hashids::decode($request->route('order_id'))[0];
        $order = $this->orderRepository->findById($order_id);

        $invoice = new Invoice;
        $invoice->amount(intval($order->SumItemsPrice()));
        $invoice->via('saman');
        $invoice->transactionId('123456');

        $payment = Payment::callbackUrl(route('payment.result', $this->hashids::encode($order_id)));

        $payment->purchase($invoice, function ($driver, $transactionId) {

        });

        return $payment->pay()->render();
    }

    public function result(Request $request,$order_id)
    {
        $request->dd();
    }
}
