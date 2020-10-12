<?php

namespace App\Http\Requests;

use App\Models\AddFeedback;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateAddFeedbackRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('add_feedback_edit');
    }

    public function rules()
    {
        return [
            'title'       => [
                'string',
                'required',
            ],
            'content'     => [
                'required',
            ],
            'username_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
