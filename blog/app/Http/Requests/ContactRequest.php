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
    public function authorize(){
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(){
        return [
          'name'=>'required',
          'email'=>'required|email',
          'subject'=>'required|min:2|max:20',
          'message'=>'required|min:5|max:500'
        ];
    }


    public function messages(){
      return[
        'name.required'=>'Поле Имя является обязательным',
        'email.email'=>'Email должен быть действующим ',
        'email.required'=>'Поле Email является обязательным',
        'subject.min'=>'Поле Врач должно содержать больше 2 символов',
        'subject.max'=>'Поле Врач должно содержать меньше 20 символов',
        'subject.required'=>'Поле Врач является обязательным',
        'message.min'=>'Поле Сообщение должно содержать больше 5 символов',
        'message.max'=>'Поле Сообщение должно содержать меньше 500 символов',
        'message.required'=>'Поле Сообщение является обязательным',
      ];
    }

}
