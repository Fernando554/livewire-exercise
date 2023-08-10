<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Arr;

class applications extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
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
        'src'
    ];
}
