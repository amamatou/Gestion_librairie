<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssistantRequest extends FormRequest
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
                // 'nom' => ['string', 'max:255'],
                // 'email' => [ 'string', 'email', 'max:255', 'unique:users'],
                // 'password' => [ 'string', 'min:8', 'confirmed'],
                // 'salaire' => ['required'],
                // 'adresse' => ['required','string'],
                // 'prenom' => ['string', 'max:255'],
                // 'dateNaissance' => ['date'],
                // 'tel' => ['string', 'max:20'],
                ];
    }
}
