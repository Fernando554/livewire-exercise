<?php

namespace App\Imports;

use App\Models\applications;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Illuminate\Support\Facades\Validator;

class ApplicationImport implements ToModel, WithHeadingRow, WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new applications([
            'name' => $row['name'],
            'last_name1' => $row['last_name1'],
            'last_name2' => $row['last_name2'],
            'phone' => $row['phone'],
            'phone2' => $row['phone2'],
            'email' => $row['email'],
            'birthdate' => $row['birthdate'],
            'curp' => $row['curp'],
            'rfc' => $row['rfc'],
            'nss' => $row['nss'],
            'nationality' => $row['nationality'],
            'place_born' => $row['place_born'],
            'account_number_bank' => $row['account_number_bank'],
            'bank' => $row['bank'],
            'clabe' => $row['clabe'],
            'infonavit' => $row['infonavit'],
            'store_id' => $row['store_id'],
            'position' => $row['position'],
            'date_start' => $row['date_start'],
            'replacement_employee_id' => $row['replacement_employee_id'],
            'replacement_employee_name' => $row['replacement_employee_name'],
            'replacement_employee_reasons' => $row['replacement_employee_reasons'],
            'replacement_employee_date' => $row['replacement_employee_date'],
            'scholarship' => $row['scholarship'],
            'gender' => $row['gender'],
            'marital_status' => $row['marital_status'],
            'street' => $row['street'],
            'number' => $row['number'],
            'suburb' => $row['suburb'],
            'colony' => $row['colony'],
            'city' => $row['city'],
            'state' => $row['state'],
            'cp' => $row['cp'],
            'cp_fiscal' => $row['cp_fiscal'],
            'notes' => $row['notes'],
            'reference' => $row['reference'],
            'business_id' => $row['business_id'],
            // 'src' => $row['src'], // Asumiendo que 'src' es el nombre del archivo de imagen en la celda
        ]);
    }

    /**
     * Valida una fila de datos.
     *
     * @param array $row
     * @return void
     */
    public function rules():array
    {
        return[
            'name' => 'required|string',
            'last_name1' => 'required|string',
            'last_name2' => 'nullable|string',
            'email' => 'required|email',
            'phone' => 'required',
            'phone2' => 'nullable',
            'birthdate' => 'required|date',
            'curp' => 'required|string',
            'rfc' => 'required|string',
            'nss' => 'required',
            'nationality' => 'required|string',
            'place_born' => 'required|string',
            'account_number_bank' => 'required',
            'bank' => 'required|string',
            'clabe' => 'required',
            'infonavit' => 'required|string',
            'store_id' => 'required',
            'position' => 'required|string',
            'date_start' => 'required|date',
            'replacement_employee_id' => 'nullable',
            'replacement_employee_name' => 'required|string',
            'replacement_employee_reasons' => 'required|string',
            'replacement_employee_date' => 'required|date',
            'scholarship' => 'required|string',
            'gender' => '',
            'marital_status' => 'required',
            'street' => 'required',
            'number' => 'required',
            'suburb' => 'nullable',
            'colony' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'cp' => 'required',
            'cp_fiscal' => 'nullable',
            'notes' => 'nullable',
            'reference' => 'nullable',
            'business_id' => 'required',
            // 'src' => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png',
        ];
    }
    
    /**
     * Valida una fila de datos.
     *
     * @param array $row
     * @return void
     */
    public function customValidationMessages()
    {
        return[
            'name.required' => 'El nombre es requerido',
            'last_name1.required' => 'El apellido paterno es requerido',
            'email.required' => 'El correo es requerido',
            'phone.required' => 'El teléfono es requerido',
            'birthdate.required' => 'La fecha de nacimiento es requerida',
            'curp.required' => 'La CURP es requerida',
            'rfc.required' => 'El RFC es requerido',
            'nss.required' => 'El NSS es requerido',
            'nationality.required' => 'La nacionalidad es requerida',
            'place_born.required' => 'El lugar de nacimiento es requerido',
            'account_number_bank.required' => 'El número de cuenta bancaria es requerido',
            'bank.required' => 'El banco es requerido',
            'clabe.required' => 'La CLABE es requerida',
            'infonavit.required' => 'El número de INFONAVIT es requerido',
            'store_id.required' => 'La tienda es requerida',
            'position.required' => 'El puesto es requerido',
            'date_start.required' => 'La fecha de inicio es requerida',
            'replacement_employee_name.required' => 'El nombre del empleado a reemplazar es requerido',
            'replacement_employee_reasons.required' => 'Las razones del reemplazo son requeridas',
            'replacement_employee_date.required' => 'La fecha de reemplazo es requerida',
            'scholarship.required' => 'La escolaridad es requerida',
            'marital_status.required' => 'El estado civil es requerido',
            'street.required' => 'La calle es requerida',
            'number.required' => 'El número es requerido',
            'colony.required' => 'La colonia es requerida',
            'city.required' => 'La ciudad es requerida',
            'state.required' => 'El estado es requerido',
            'cp.required' => 'El código postal es requerido',
            'business_id.required' => 'La empresa es requerida',
        ];
    }
}
