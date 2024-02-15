<?php

namespace App\Http\Controllers;

use App\Models\Datacsv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 *
 */
class PerseCsvController extends Controller
{

    /**
     *
     */
    public function index()
    {
        return view('upload')
            ->with('activePage', 'upload');
    }

    /**
     *
     */
    public function store(Request $request)
    {

        //Отключаем включение событий и логов при создании наших строк
        DB::disableQueryLog();
        DB::connection()->unsetEventDispatcher();

        if($request->isMethod('post')){
            if($request->hasFile('csv')) {
                $file = $request->file('csv');

                $csv = \League\Csv\Reader::createFromPath($request->file('csv')->getRealPath(), 'r');
                $csv->setDelimiter(';');
                $csv->setEnclosure('n');
                $csv->setHeaderOffset(0);
                $header = $csv->getHeader();
                $arrDatacsv = [];
                foreach($csv->getRecords() as $str) {

                    $arrDatacsv[] = [
                        'code' => $str['Код'], //Код; 'Б0001471'
                        'name' => $str['Наименование'], //Наименование 'Вентилятор осевой вытяжной с сеткой D 125 (ERA 5S)'
                        'level_one' => $str['Уровень1'], //Уровень1 'Import'
                        'level_two' => $str['Уровень2'], //Уровень2 'Модульные системы вентиляции'
                        'level_three' => $str['Уровень3'], //Уровень3 ''
                        'price' => $str['Цена'], //Цена '346'
                        'priceSP' => $str['ЦенаСП'], //ЦенаСП '75'
                        'quantity' => $str['Количество'], //Количество '339'
                        'properties' => $str['Поля свойств'], //Поля свойств '45'
                        'joint_sale' => $str['Совместные покупки'], //Совместные покупки ''
                        'unit' => $str['Единица измерения'], //Единица измерения 'шт'
                        'picture' => $str['Картинка'], //Картинка '_MG_8088'
                        'home' => $str['Выводить на главной'], //Выводить на главной ''
                        'description' => $str['Описание,,,,,,,,,,,,,,,,,,,,,,'], //Описание '0'
                    ];

                    if(count($arrDatacsv) === 1000) {
                        Datacsv::insert($arrDatacsv);
                        $arrDatacsv = [];
                    }
                }
                if(count($arrDatacsv) > 0) {
                    Datacsv::insert($arrDatacsv);
                    $arrDatacsv = [];
                }

            }
        }

        return redirect()->back();
    }
}
