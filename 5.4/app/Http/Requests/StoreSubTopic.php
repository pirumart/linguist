<?php

namespace App\Http\Requests;

use App\Models\SubTopic;
use Illuminate\Foundation\Http\FormRequest;

class StoreSubTopic extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return boolean
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
            //
        ] + (new SubTopic)->rules();
    }
}
