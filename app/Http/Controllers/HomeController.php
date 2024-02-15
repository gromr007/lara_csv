<?php

namespace App\Http\Controllers;

use App\Http\Resources\DataCsvPaginateResource;
use App\Models\Datacsv;
use App\Repositories\DatacsvRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     *
     * */
    public function index()
    {
        return view('home')->with('activePage', 'home');
    }

    /**
     *
     * */
    public function indexJson(Request $request, DatacsvRepository $repDatacsv)
    {
        $paginator = $repDatacsv->cursorPaginate();

        return new DataCsvPaginateResource($paginator);
    }

}
