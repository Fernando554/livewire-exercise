<?php

namespace App\Exports;

use App\Models\applications;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ApplicationExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return applications::select(
            'id',
            'name',
            'last_name1',
            'last_name2',
            'email',
            'phone',
            'phone2',
            'birthdate',
            'curp',
            'rfc',
            'nss',
            'nationality',
            'place_born',
            'account_number_bank',
            'bank',
            'clabe',
            'infonavit',
            'store_id',
            'position',
            'date_start',
            'replacement_employee_id',
            'replacement_employee_name',
            'replacement_employee_reasons',
            'replacement_employee_date',
            'scholarship',
            'gender',
            'marital_status',
            'street',
            'number',
            'suburb',
            'colony',
            'city',
            'state',
            'cp',
            'cp_fiscal',
            'notes',
            'reference',
            'business_id',
        )->get();
    }

    public function headings(): array
    {
        //poner todos los campos de la tabla
        return [
            'id',
            'name',
            'last_name1',
            'last_name2',
            'email',
            'phone',
            'phone2',
            'birthdate',
            'curp',
            'rfc',
            'nss',
            'nationality',
            'place_born',
            'account_number_bank',
            'bank',
            'clabe',
            'infonavit',
            'store_id',
            'position',
            'date_start',
            'replacement_employee_id',
            'replacement_employee_name',
            'replacement_employee_reasons',
            'replacement_employee_date',
            'scholarship',
            'gender',
            'marital_status',
            'street',
            'number',
            'suburb',
            'colony',
            'city',
            'state',
            'cp',
            'cp_fiscal',
            'notes',
            'reference',
            'business_id',
        ];
    }
}
