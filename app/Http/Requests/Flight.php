<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Flight extends FormRequest
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
            'departing_time' => 'required',
            'arriving_time' => 'required',
            'duration' => 'required',
            'has_wifi' => 'required',   
            'is_direct' => 'required|image',

            $table->DateTime('departing_time');
            $table->DateTime('arriving_time');
            $table->string('duration');
            $table->boolean('has_wifi');
            $table->boolean('is_direct');
        ];
    }
}
