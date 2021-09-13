<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Repositories\TransactionRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    private $transactionRepository;

    public function __construct(TransactionRepository $transactionRepository)
    {
        $this->transactionRepository = $transactionRepository;
    }

    public function index()
    {
        $transactions = $this->transactionRepository->paginateForUserIdByFilters(Auth::id());
        return view('panel.transactions.index', compact('transactions'));
    }

    public function feedback(Request $request)
    {
        if ($request->input('status')) {
            $status = $request->input('status');
            if ($status == 'success') {
                newFeedback('پیام', 'پرداخت با موفقیت انجام شد', 'success');
            } elseif ($status == 'fail') {
                newFeedback('پیام', 'پرداخت با شکست مواجه شد', 'error');
            } elseif ($status == 'cancel') {
                newFeedback('پیام', 'پرداخت توسط شما لغو شد', 'warning');
            } else {
                abort(404);
            }
        } else {
            abort(404);
        }
    }
}
