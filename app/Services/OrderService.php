<?php

namespace App\Services;

use App\Models\License;
use Illuminate\Validation\ValidationException;


class OrderService{

public function purchase(int $userId,int $productId):License
{
    return DB::transaction(function() use ($userId,$productId){

    $license=License::query()->where('product_id',$productId)->whereNull('user_id')->lockForUpdate()->first(); //we are using lock for update for concurrent or race conditions

    if(!$license)
        {
            throw ValidationException::withMessages(['product_id'=>['Product is out of stock.']]);
        }

        $license->update(['user_id'=>$userId]);
        return $license->fresh('product','user');


    });
}
}