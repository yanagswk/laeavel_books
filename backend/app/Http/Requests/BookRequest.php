<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            //
            'book_name' => 'required',
            'author' => 'required',
            'likes' => 'required|numeric'
        ];
    }


    /**
     * エラーメッセージ設定
     */
    public function messages()
    {
        return [
            'book_name.required' => '本の名前は必須です。',
            'author.required' => '著者は必須です。',
            'likes.required' => '好き度は必須です。',
            'likes.numeric' => '数値で設定してください。'
        ];
    }
}
