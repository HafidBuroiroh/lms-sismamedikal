<?php

namespace App\Imports;

use App\Models\Pertanyaan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PertanyaanImport implements ToModel, WithHeadingRow
{
    protected $id_submateri;

    public function __construct($id_submateri)
    {
        $this->id_submateri = $id_submateri;
    }
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Pertanyaan([
            'pertanyaan' => $row['pertanyaan'],
            'option_1' => $row['option_1'],
            'option_2' => $row['option_2'],
            'option_3' => $row['option_3'],
            'option_4' => $row['option_4'],
            'option_5' => $row['option_5'],
            'true_option' => $row['true_option'],
            'id_submateri' => $this->id_submateri,
        ]);
    }
}
