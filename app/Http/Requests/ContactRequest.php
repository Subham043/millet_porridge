<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Stevebauman\Purify\Facades\Purify;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
	 * Handle a passed validation attempt.
	 *
	 * @return void
	 */
	protected function prepareForValidation(): void
	{
		$request = Purify::clean($this->all());
		$this->replace([...$request]);
	}

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|numeric|digits:10',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'g-recaptcha-response' => 'required|captcha',
        ];
    }
}
