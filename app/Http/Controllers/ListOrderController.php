<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListOrderRequest;
use App\Models\Order;
use App\Notifications\AdminNotification;
use Illuminate\Support\Facades\Notification;

class ListOrderController extends Controller
{
    public function index(ListOrderRequest $request)
    {
        try {

            return Order::filterBy($request->validated())->get();

        } catch (\Exception $e) {

            Notification::route('mail', 'taylor@example.com')
                ->route('sms', '0910000000')
                ->notify(new AdminNotification());

        }
    }
}
