<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Contracts\Service\Attribute\Required;

class ContactRequest extends FormRequest
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
            'last_name' => 'required',
            'first_name' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'postcode' => 'required',
            'address' => 'required',
            'building_name' => 'required',
            'opinion' => 'required|max:120',
        ];
    }

    public function messages()
    {
        return [
            'last_name' => '苗字は必須です',
            'first_name' => '名前は必須です',
            'gender' => '性別は必須です',
            'email' => 'メールアドレスは必須です',
            'postcode' => '郵便番号は必須です',
            'address' => '住所は必須です',
            'opinion' => 'ご意見は必須です',
            'opinion.max' => ':max 文字以内で入力してください',
        ];
    }
}
