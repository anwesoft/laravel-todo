<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskItemRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'string',
            'description' => 'string',
            'completed' => 'boolean',
        ];
    }
}
