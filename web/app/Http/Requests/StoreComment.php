<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComment extends FormRequest
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
            'content' => 'required|max:500',
        ];
    }

    /**
     * 項目の日本語化
     * @return array
     */
    public function attributes()
    {
        return [
            'content' => 'コメント',
        ];
    }

    /**
     * バリデーションメッセージのオーバーライド
     * @return array
     */
    public function messages()
    {
        return [
            'content.required' => ':attributeを入力してください',
        ];
    }
}