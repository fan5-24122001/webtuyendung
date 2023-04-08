<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class create extends FormRequest
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
            'id_user'=>'required',
            'name'=>'required',
            'email'=>'required|email:rfc,dns',
            'amount'=>'required|integer',
            'numberPhone'=>'required',
            'address'=>'required',
            'location'=>'required',
            'skill'=>'required',
            'minMoney'=>'required|integer',
            'maxMoney'=>'required|integer',
            'title'=>'required',
            'content'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'id_user'=>'Không trống',
            'name.required'=>'Không được để trống',
            'email.required'=>'Không được để trống',
            'amount.integer'=>'Phải là số nguyên',
            'amount.required'=>'Không được để trống',
            'numberPhone.required'=>'Không được để trống',
            'address.required'=>'Không được để trống',
            'location.required'=>'Không được để trống',
            'skill.required'=>'Không được để trống',
            'minMoney.integer'=>'Phải là số nguyên',
            'maxMoney.integer'=>'Phải là số nguyên',
            'maxMoney.required'=>'Không được để trống',
            'minMoney.required'=>'Không được để trống',
            'title.required'=>'Không được để trống',
            'content.required'=>'Không được để trống',
        ];
    }
}
