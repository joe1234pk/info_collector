<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Response;

class PassengerRequest extends FormRequest
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
         $rules = [
            //
        ];
        if($this->request->get('new_passengers'))
        {

               for($i=0;$i<count($this->request->get('new_passengers')['given_name']);$i++)
             {
                  //$rules['new_passengers.'.'given_name.'.$i] = 'required';
                  // $rules['new_passengers.'.'surname.'.$i] ='required';
                  //$rules['new_passengers.'.'title.'.$i] ='required';
                  //$rules['new_passengers.'.'gender.'.$i] ='required';
                  $rules['new_passengers.'.'email.'.$i] ='required|email';
                  $rules['new_passengers.'.'mobile.'.$i] ='required|numeric';
                  $rules['new_passengers.'.'birth_date.'.$i] ='required|date';
                  //$rules['new_passengers.'.'emgcy_contact.'.$i] ='required';
                  //$rules['new_passengers.'.'passport_num.'.$i] ='required';
                  //$rules['new_passengers.'.'passport_nationality.'.$i] ='required';
                  $rules['new_passengers.'.'passport_date_of_issue.'.$i] ='required|date';
                  $rules['new_passengers.'.'passport_expiry_date.'.$i] ='required|date';
                 //$rules['new_passengers.'.'place_of_birth.'.$i] ='required';
                 }
        

            }

            return $rules;
    }

    // public function response()
    // {
    //   return return redirect('/form')->withInput();
    // }
}
