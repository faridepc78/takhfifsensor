<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\OrderRepository;

class OrderController extends Controller
{
    private $orderRepository;

    public function __construct(OrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function pending()
    {
        $orders = $this->orderRepository->paginatePendingBySearch();
        return view('admin.orders.pending', compact('orders'));
    }

    public function index()
    {
        $orders = $this->orderRepository->paginateByFilters();
        return view('admin.orders.index', compact('orders'));
    }

    public function items($id)
    {

    }
}
