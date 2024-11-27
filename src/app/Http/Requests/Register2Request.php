<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Register2Request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'weight' => 'required|numeric|decimal:1',
            'target_weight' => 'required|numeric|decimal:1'
        ];
    }

    public function message()
    {
        return [
            'weight.required' => '現在の体重を入力してください',
            'weight.numeric' => '4桁までの数字で入力してください',
            'weight.decimal' => '小数点は１桁で入力してください',
            'target_weight.required' => '目標の体重を入力してください',
            'target_weight.numeric' => '４桁までの数字で入力してください',
            'target_weight.decimal' => '小数点は１桁で入力してください'
        ];
    }
}
