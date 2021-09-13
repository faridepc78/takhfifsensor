<?php

namespace App\Repositories;

use App\Filters\Transaction\Date;
use App\Filters\Transaction\Status;
use App\Filters\Transaction\Token;
use App\Models\Transaction;
use Illuminate\Pipeline\Pipeline;

class TransactionRepository
{
    public function paginateByFilters()
    {
        return app(Pipeline::class)
            ->send(Transaction::query())
            ->through([
                Status::class,
                Date::class,
                Token::class
            ])
            ->thenReturn()
            ->latest()
            ->paginate(10);
    }

    public function paginateForUserIdByFilters($user_id)
    {
        return app(Pipeline::class)
            ->send(Transaction::query())
            ->through([
                Status::class,
                Date::class,
                Token::class
            ])
            ->thenReturn()
            ->where('user_id', '=', $user_id)
            ->latest()
            ->paginate(10);
    }
}
