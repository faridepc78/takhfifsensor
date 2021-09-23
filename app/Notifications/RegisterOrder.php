<?php

namespace App\Notifications;

use App\Channels\SmsChannel;
use Illuminate\Notifications\Notification;

class RegisterOrder extends Notification
{
    private $user_full_name;
    private $order_code;

    public function __construct($user_full_name, $order_code)
    {
        $this->user_full_name = $user_full_name;
        $this->order_code = $order_code;
    }

    public function via($notifiable)
    {
        return [SmsChannel::class];
    }

    public function toSms($notifiable)
    {
        return $this->user_full_name . ' ' . 'عزیز' .
            'سفارش شما با کد:' . '<br>' .
            $this->order_code .
            '<br>' .
            'سفارش شما ثبت شد لطفا برای پرداخت نهایی منتظر تایید مدیریت باشید';
    }
}
