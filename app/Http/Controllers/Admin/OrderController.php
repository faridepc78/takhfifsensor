<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Order\UpdateOrderItemRequest;
use App\Models\Order;
use App\Repositories\OrderRepository;
use Exception;
use Illuminate\Support\Facades\DB;

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
        $order = $this->orderRepository->findById($id);
        $items = $this->orderRepository->getAllItemsByOrderId($id);
        return view('admin.orders.items', compact('order', 'items'));
    }

    public function update_items($id)
    {
        $item = $this->orderRepository->findByItemId($id);
        return view('admin.orders.item', compact('item'));
    }

    public function update_items_do(UpdateOrderItemRequest $request, $id)
    {
        try {
            DB::transaction(function () use ($request, $id) {
                $orderItem = $this->orderRepository->findByItemId($id);
                $this->orderRepository->updateItem($request, $id);
                $this->orderRepository->update($request, $orderItem->order->id);

                if ($orderItem->order['status'] == Order::PENDING) {
                    $this->orderRepository->updateStatus(Order::UPDATED, $id);
                }

            });
            DB::commit();
            newFeedback();
        } catch (Exception $exception) {
            DB::rollBack();
            newFeedback('پیام', 'عملیات با شکست مواجه شد', 'error');
        }
        return redirect()->route('orders.update_items', $id);
    }

    public function confirm($id)
    {
        try {
            $order = $this->orderRepository->findById($id);
            if ($order['status'] == Order::PENDING) {
                $this->orderRepository->updateStatus(Order::ACCEPT, $id);
            } else {
                abort(403);
            }
            newFeedback();
        } catch (Exception $exception) {
            newFeedback('پیام', 'عملیات با شکست مواجه شد', 'error');
        }
        return redirect()->route('orders.pending');
    }
}
