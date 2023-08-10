<?php

namespace App\Exports;

use App\Models\applications;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithDrawings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class ApplicationExport implements FromCollection, WithHeadings, WithEvents, WithDrawings
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
            'image'
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event){
                $event->sheet->getDefaultRowDimension()->setRowHeight(30);
                for ($column = 'A'; $column !== 'AM'; $column++) {
                    $event->sheet->getDelegate()->getColumnDimension($column)->setWidth(20);
                }
                $event->sheet->getDelegate()->getColumnDimension('AM')->setWidth(30);
            }
        ];
    }

    public function drawings()
    {
        $applications = applications::all();
    
        $drawings = [];
    
        foreach ($applications as $index => $application) {
            if (!empty($application->src) && file_exists(public_path('storage/' . $application->src))) {
                $drawing = new Drawing();
                $drawing->setName('Logo' . ($index + 1));
                $drawing->setDescription('Logo');
                $drawing->setPath(public_path('storage/' . $application->src));
                $drawing->setHeight(50);
                $drawing->setCoordinates('AM' . ($index + 2));
                $drawing->setOffsetX(5);
                $drawing->setOffsetY(5);
                $drawings[] = $drawing;
            }
        }
    
        return $drawings;
    }
}
