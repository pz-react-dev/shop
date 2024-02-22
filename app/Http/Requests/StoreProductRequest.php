<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'description' => 'required|max:1024',
            'amount' => 'required|integer|min:0',
            'unit' => 'required',
            'price' => 'required|numeric|between:0,99999.99',
            'image' => 'nullable|image|mimes:jpg,png',
            'category_id' => 'nullable|integer|min:1',
        ];
    }

    //Alternatywny sposob na tlumaczenie - Sposob I
    // public function messages()
    // {
    //     return [
    //         'name' => 'Pole nazwa produktu jest wymagane.',
    //         'description' => 'Pole opis produktu jest wymagane.',
    //     ];
    // }


    //Alternatywny sposob na tlumaczenie - Sposob II
    public function messages()
    {
        return [
            'name.required' => 'Pole :attribute jest wymagane.',
            'description.required' => 'Pole :attribute jest wymagane.',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nazwa produktu',
            'description' => 'opis produktu',
        ];
    }
}
