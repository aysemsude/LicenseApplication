<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreOrderRequest;
use App\Services\OrderService;
use Illuminate\Http\JsonResponse;


class OrderController extends Controller
{
    public function store(StoreOrderRequest $request, OrderService $orderService):JsonResponse{
        $license=$orderService-purchase($request->user_id,$request->product_id);

        return response()->json(['message'=>'purchase successfull',
        ]);
    }
}
