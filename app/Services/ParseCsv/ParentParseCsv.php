<?php

namespace App\Services\ParseCsv;

use App\Repositories\DatacsvRepository;
use Illuminate\Http\Request;

class ParentParseCsv
{
    protected Request $request;
    protected DatacsvRepository $repository;

    /**
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->repository = new DatacsvRepository;
    }


}
