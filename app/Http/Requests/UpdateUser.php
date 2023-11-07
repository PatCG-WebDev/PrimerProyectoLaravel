<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Controllers\UsuarioController;

class UpdateUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    /* public function rules(): array
    {
        return [
            'name' => 'required|min:3',
            'surName' => 'required',
            'slug' => 'required|unique:users,slug,' . $usuario->id,
            'userName' => 'required',
            'password'=> 'required',
            'email'=> 'required',
            'phone' => 'required',
            'seccion' =>'required',
        ];
    }
 */
    public function attributes(): array
    {
        return [
            'name'=> 'nombre',
            'surName'=> 'apellidos',
            'UserName'=> 'nombre de usuario',
            'seccion'=> 'sección',

        ];
    }

    public function messages(): array
    {
        return [
            'userName.required'=> 'El campo nombre de usuario es obligatorio.',
        ];
    }
}
