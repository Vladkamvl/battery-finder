<?php

namespace App\Http\Requests\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BatteryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'modelBattery' => 'required | string | min:2'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'modelBattery.required' => 'Введите модель батарейки',
            'modelBattery.string' => 'Модель батарейки должная быть текстом',
            'modelBattery.min' => 'Модель батарейки должная быть длинее 2-х символов',
        ];
    }
}
