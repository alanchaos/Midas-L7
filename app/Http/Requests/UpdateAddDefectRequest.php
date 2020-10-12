<?php

namespace App\Http\Requests;

use App\Models\AddDefect;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateAddDefectRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('add_defect_edit');
    }

    public function rules()
    {
        return [
            'username_id'    => [
                'required',
                'integer',
            ],
            'category_id'    => [
                'required',
                'integer',
            ],
            'defect'         => [
                'string',
                'required',
            ],
            'available_date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'available_time' => [
                'required',
                'date_format:' . config('panel.time_format'),
            ],
            'remark'         => [
                'string',
                'nullable',
            ],
            'status_id'      => [
                'required',
                'integer',
            ],
        ];
    }
}
