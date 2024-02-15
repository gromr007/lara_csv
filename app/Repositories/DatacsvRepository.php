<?php

namespace App\Repositories;

use App\Models\Datacsv;

class DatacsvRepository
{

    public function cursorPaginate()
    {
        return Datacsv::sel()->cursorPaginate(10);
    }

    public function insert($arrDatacsv)
    {
        Datacsv::insert($arrDatacsv);
    }


}
