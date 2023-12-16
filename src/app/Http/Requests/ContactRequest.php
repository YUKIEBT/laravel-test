<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'family-name' => ['required', 'string', 'max:255'],
            'first-name' => ['required', 'string', 'max:255'],
            'gender' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255'],
            '1st-tel' => ['required', 'numeric', 'max:4'],
            '2nd-tel' => ['required', 'numeric', 'max:4'],
            '3rd-tel' => ['required', 'numeric', 'max:4'],
            'address' => ['required', 'max:255'],
            'building' => ['nullable', 'max:255'],
            'category' => ['required', 'not_in:foo,bar,選択してください'],
            'content' => ['nullable', 'max:255'],

        ];
    }

    public function messages()
    {
        return [
            'first-name.required' => '性を入力してください',
            'first-name.string' => '性を文字列で入力してください',
            'first-name.max' => '性を255文字以下で入力してください',
            'family-name.required' => '名を入力してください',
            'family-name.string' => '名を文字列で入力してください',
            'family-name.max' => '名を255文字以下で入力してください',
            'gender' => '選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスを文字列で入力してください',
            'email.email' => '有効なメールアドレス形式を入力してください',
            'email.max' => 'メールアドレスを255文字以下で入力してください',
            '1st-tel.required' => '電話番号を入力してください',
            '1st-tel.numeric' => '電話番号を数値で入力してください',
            '1st-tel.digits_between' => '電話番号を10桁から11桁の間で入力してください',
            '2nd-tel.required' => '電話番号を入力してください',
            '2nd-tel.numeric' => '電話番号を数値で入力してください',
            '2nd-tel.digits_between' => '電話番号を10桁から11桁の間で入力してください',
            '3rd-tel.required' => '電話番号を入力してください',
            '3rd-tel.numeric' => '電話番号を数値で入力してください',
            '3rd-tel.digits_between' => '電話番号を10桁から11桁の間で入力してください',
            'address.required' => '住所を入力してください',
            'address.max' => '住所を255文字以下で入力してください',
            'building.max' => '建物名を255文字以下で入力してください',
            'category.not_in:foo,bar' => '選択してください',
            'content.max' => 'メールアドレスを255文字以下で入力してください',
        ];
    }
}
