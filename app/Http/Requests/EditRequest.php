<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
{
    public function authorize()
    {
        return true;   // ← false のままだと 403 になります
    }

    public function rules()
    {
        return [
            'status'  => ['required'],
            'remarks' => ['nullable', 'max:120'],
        ];
    }

    public function messages()
    {
        return [
            'status.required' => 'ステータスを選択してください',
            'remarks.max'     => '備考は120文字以内で入力してください',
        ];
    }
}