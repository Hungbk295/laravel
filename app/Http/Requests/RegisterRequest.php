<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegisterRequest extends Request {

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
			'name' => 'required',
			'email' => 'required|unique:users,email ',
			'password'=> 'required'
		];
	}
	public function messages (){
		return [
			'name.required' => 'vui long nhap ten',
			'email.required' => 'vui long nhap email',
			'email.unique' => 'email da ton tai',
			'password.required' => 'vui long nhap password',
		];
	}

}
