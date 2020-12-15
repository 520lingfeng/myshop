<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use \Illuminate\Validation\Validator;

class RegisterPost extends FormRequest
{
    /**
     * 判断用户是否有权限进行此请求
     * Determine if the user is authorized to make this request.
     * 如果authorize方法返回false，则会自动返回一个包含403状态码的HTTP响应，也不会运行控制器的方法
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * @var bail 在某个属性第一次验证失败后停止运行验证规则
     * @var unique:数据表
     * @var alpha_dash 可能具有字母、数字、破折号（ - ）以及下划线（ _ ）
     * @return array
     */
    public function rules(Request $request)
    {
        $rules = [
            'usercode' => 'bail|required|alpha_dash|unique:user|min:4|max:15',
            'password' => 'bail|required|alpha_dash|min:6|max:16'
        ];
        if($request->selectedFailover){
            $rules['selectedSlave'] = 'required';
            $rules['tableData'] = 'required';
        }
        return $rules;
    }

    /**
     * 获取已定义的验证规则的错误信息
     * @return array
     */
    public function messages()
    {
        return [
            'usercode.required'     => '账号不能为空！',
            'usercode.alpha_dash'   => '只能输入：数字、字母、下划线、破折号！',
            'usercode.unique'       => '该账号已被注册！',
            'usercode.min'          => '账号最小4位数',
            'usercode.max'          => '账号最大15位数',
        ];
    }


    /**
     * 请求之后的钩子
     */
    // public function withValidator(Validator $validator)
    // {
    //     $validator->after(function ($validator) {
    //         if ($this->somethingElseIsInvalid()) {
    //             $validator->errors()->add('field', 'Something is wrong with this field!');
    //         }
    //     });
    // }
}
