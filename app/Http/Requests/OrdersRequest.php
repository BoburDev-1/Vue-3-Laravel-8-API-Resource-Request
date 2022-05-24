<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrdersRequest extends FormRequest
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
            'name' => 'required|min:4|max:155',
            'mail' => 'required|min:5|max:155|email:rfc,dns',
            // 'phone' => 'integer|min:11|max:14',
            // 'phone' => 'numeric|min:11|max:14',
            // 'required|integer|between:1,10'
            'phone' => 'digits_between:10,12',
            'orders' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'name is required',
            'name.max' => 'maxsimum 7ta',
            'name.min' => 'minimum 6ta',
            'mail.min' => 'minimum 6 ta ...',
            'mail.required' => 'Mail is required',
            'mail.email' => 'Soxta mail manzil kiritildi',
            'phone.required' => 'message is required|numeric',
            'phone.integer' => 'message is required|numeric',
            'phone.numeric' => 'Telefon raqam notugri kiritildi',
            'phone.digits_between' => 'Telefon raqam notugri kiritildi',
            'phone.max' => 'Telefon raqam 19 ta sondan owmasin',
            'phone.min' => 'Telefon raqam 11 ta sondan kambulmasin',
            'orders.required' => 'orders is required',
        ];
    }
}
