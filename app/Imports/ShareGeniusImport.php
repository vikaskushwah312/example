<?php

namespace App\Imports;

use App\Models\shareGeniusList;
use Maatwebsite\Excel\Concerns\ToModel;

class ShareGeniusImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {       
        return new shareGeniusList([
        'name' => $row[0],
        
        ]);
    }
}
