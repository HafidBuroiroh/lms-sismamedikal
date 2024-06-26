<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class PertanyaanTemplateExport implements FromArray, WithHeadings, WithStyles, ShouldAutoSize
{
    /**
     * @return array
     */
    public function array(): array
    {
        // Return an empty array as this is a template export with no data
        return [];
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'pertanyaan', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'true_option'
        ];
    }

    /**
     * Apply styles to the worksheet
     *
     * @param Worksheet $sheet
     * @return array
     */
    public function styles(Worksheet $sheet)
    {
        return [
            // Make the first row bold
            1    => ['font' => ['bold' => true]],
        ];
    }
}
