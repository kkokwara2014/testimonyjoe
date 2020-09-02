<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrackStoreRequest extends FormRequest
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
            'title'=>'required',
            'album_id'=>'required',
            'trackcategory_id'=>'required',
            'filename' => 'required',
            'filename.*' => 'mimes:mpga,wav,mp4'
        ];
    }
}