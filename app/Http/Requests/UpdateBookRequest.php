<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'series_id' => 'integer|exists:series,id',
            'score' => 'required|integer|max:100',
            'year' => 'required|integer|digits:4',
            'part' => 'integer|max:1000',
            'annotation' => 'required|string',
            'authors' => 'array',
            'authors.*' => 'integer|distinct|exists:authors,id',
            'tags' => 'array',
            'tags.*' => 'integer|distinct|exists:tags,id',
            'genres' => 'array',
            'genres.*' => 'integer|distinct|exists:genres,id',
        ];
    }
}
