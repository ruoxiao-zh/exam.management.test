<?php

namespace App\Imports;

use App\Result;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ResultImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Result([
            'no'                       => (int)$row['考生号'],
            'exam_registration_number' => (int)$row['准考证号'],
            'name'                     => $row['姓名'],
            'total_points'             => (int)$row['总+优惠'],
            'chinese'                  => (int)$row['语文'],
            'mathematics'              => (int)$row['数学'],
            'english'                  => (int)$row['外语'],
            'science'                  => (int)$row['理综'],
            'arts'                     => (int)$row['文综'],
            'physical_education'       => (int)$row['体育'],
            'discounts'                => (int)$row['优惠'],
            'physicochemical'          => (int)$row['理化'],
            'information_technology'   => (int)$row['信息'],
        ]);
    }
}
