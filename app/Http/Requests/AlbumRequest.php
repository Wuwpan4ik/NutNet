<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlbumRequest extends FormRequest
{

    /**
     * Get the request method.
     *
     * @return string
     */

    public function method()
    {
        return $this->getMethod();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'string|required|max:32',
            'author' => 'string|required|max:32',
            'description' => 'string|required',
        ];
    }
}
