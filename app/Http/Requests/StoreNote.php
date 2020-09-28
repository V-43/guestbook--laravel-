<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNote extends FormRequest
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
            'author' => 'required|string|max:256',
            'note' => 'required|string|min:5'
        ];
    }

    public function messages()
    {
        return [
            'author.required' => 'Представьтесь, пожалуйста',
            'author.max' => 'Какое длинное имя! Нельзя ли покороче?',
            'note.required' => 'А где сообщение?',
            'note.min'  => 'Такие короткие сообщения не принимаются!',
        ];
    }
}
