<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FlightRequest extends FormRequest
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
            'from_city' => 'required',
            'to_city' => 'required',
            'airline' => 'required',
            'imageAirline' => 'required|image',   
            'departing_time' => 'required',
            'arriving_time' => 'required',
            'duration' => 'required',
            'has_wifi' => 'required',   
            'is_direct' => 'required',
            'imageCity'=> 'required',
            'pilot_id'=> 'required',
            // 'pilot_id' => 'required|exists:pilots,availability|1'
        ];
    }
}
