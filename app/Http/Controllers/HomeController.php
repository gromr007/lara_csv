<?php

namespace App\Http\Controllers;

use App\Http\Resources\DataCsvPaginateResource;
use App\Models\Datacsv;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     *
     * */
    public function index()
    {
        $paginator = Datacsv::select("code","name","level_one","level_two","level_three","price","priceSP","quantity","properties","joint_sale","unit","picture","home","description")->paginate(10)->toArray();

        return view('home')
            ->with('paginator', $paginator)
            ->with('activePage', 'home');
    }

    /**
     *
     * */
    public function indexJson(Request $request)
    {
        $paginator = Datacsv::select('id',"code","name","level_one","level_two","level_three","price","priceSP","quantity","properties","joint_sale","unit","picture","home","description")
            ->cursorPaginate(10);
        return new DataCsvPaginateResource($paginator);
    }

}
