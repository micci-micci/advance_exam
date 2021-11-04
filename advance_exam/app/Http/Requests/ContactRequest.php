<?php

namespace App\Http\Requests;
use App\Rules\Zipcode;

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
            'fullname' => 'required',
            // 'first_name' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'postcode' => ['required', new Zipcode],
            'address' => 'required',
            'opinion' => 'required|max:120',
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge(['postcode' => mb_convert_kana($this->postcode, 'a')]);
    }

    public function messages()
    {
        return [
            'fullname.required' => '苗字は必須です',
            // 'first_name' => '名前は必須です',
            'gender.required' => '性別は必須です',
            'email.required' => 'メールアドレスは必須です',
            'postcode.required' => '郵便番号は必須です',
            'address.required' => '住所は必須です',
            'opinion.required' => 'ご意見は必須です',
            'opinion.max' => ':max 文字以内で入力してください',
        ];
    }
}
