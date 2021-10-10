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
            'email' => 'required|email',
            'name' => 'required',
            'subject' => 'required|min:5|max:50|',
            'message' => 'required|min:15|max:500|'
        ];
    }

//    public function attributes()
//    {
//        return [
//          'name' => 'Your'
//        ];
//            }
    public function messages()
    {
        return [
            'name.required' => 'Your name is required',
            'email.required' => 'Your email is required',
            'subject.required' => 'Your subject is required',
            'message.required' => 'Your message is required'

        ];
    }
}
