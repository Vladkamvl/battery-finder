<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FindBySizeRequest extends FormRequest
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
            'diamOfBattery' => 'required | numeric',
            'thickOfBattery' => 'required | numeric',
        ];
    }
    public function messages()
    {
        return [
            'diamOfBattery.required' => 'Поле диаметр обязательно к заполнению',
            'thickOfBattery.required' => 'Поле тодщины обязательно к заполнению',
            'diamOfBattery.numeric' => 'Диаметр должен быть числом',
            'thickOfBattery.numeric' => 'Тодщина должна быть числом',
        ];
    }
}
