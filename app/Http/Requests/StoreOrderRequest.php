<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use App\Models\License;

class StoreOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array    //we are giving 422 error with validaton errors
    {
        return [
            'user_id'=>['required','integer','exists:users,id'],
            'product_id'=>['required','integer,','exists:products,id'],
        ];
    }
    public function withValidator($validator):void{

    $validator->after(function($validator){
        $hasAvailableStock=License::query()->where('product_id',$this->product_id)->whereNull('user_id')->exists();

        if(!$hasAvailableStock){
            $validator->errors()->add('product_id','Selected product is out of stock');
        }


    });
    }
    
}
