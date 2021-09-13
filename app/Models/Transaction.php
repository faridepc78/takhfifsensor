<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';

    protected $guarded =
        [
            'id',
            'created_at',
            'updated_at'
        ];

    protected $fillable =
        [
            'payment_id',
            'user_id',
            'order_id',
            'paid',
            'transaction_id',
            'status'
        ];

    const ACTIVE = 'active';
    const INACTIVE = 'inactive';
    const PENDING = 'pending';
    static $statuses =
        [
            self::ACTIVE,
            self::INACTIVE,
            self::PENDING
        ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id')->withDefault();
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id')->withDefault();
    }

    public function scopeTransaction()
    {
        return $this->transaction_id !== null ? $this->transaction_id : 'ندارد';
    }
}
