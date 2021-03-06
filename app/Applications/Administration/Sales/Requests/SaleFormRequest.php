<?php
/**
 * Created by PhpStorm.
 * User: alfjuniorbh
 * Date: 20/10/16
 * Time: 13:56
 */
namespace App\Applications\Administration\Sales\Requests;

use App\Core\Requests\Request;

class SaleFormRequest extends Request
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
            'customer_id' => 'required'
        ];


    }
    public function messages()
    {
        return [
            'customer_id.required'    => 'Favor selecioar o <b>CLIENTE!</b>',
        ];
    }


}