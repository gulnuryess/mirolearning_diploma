<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTopicRequest extends FormRequest
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
            'title'         => 'required',
            'theory'        => 'required|array',
            'topic_file'    => 'required|file',
            'question'      => 'required|array',
            'answer'        => 'required|array',
            'A'             => 'required|array',
            'B'             => 'required|array',
            'C'             => 'required|array',
            'D'             => 'required|array',
        ];
    }
}
