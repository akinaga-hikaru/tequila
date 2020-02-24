<?php

namespace App\Http\Controllers;

use App\SyouhinTable;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\ApplyInfo\ApplyInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Helpers\Helper;
use Illuminate\View\View;

class SyouhinController extends Controller
{

    public function syouhin()
    {
        // DB(tequila)のTable(syouhin)から全てのデータを取得
        $syouhin_contents = DB::table('syouhin')->get();

        // $syouhin_titles =[
        //     ['sauza','◇SAUZA'],
        //     ['josecuervo','◇Jose Cuervo'],
        //     ['olmeca','◇OLMECA'],
        //     ['mariachi','◇MARIACHI'],
        //     ['alacran','◇ALACRAN'],
        //     ['ahatoro','◇AHA TORO'],
        //     ['eltesoro','◇El Tesoro'],
        //     ['agavales','◇Agavales'],
        //     ['ole','◇Ole'],
        //     ['orendain','◇Orendain'],
        //     ['camino','◇Camino'],
        //     ['elcharro','◇EL CHARRO'],
        //     ['herradura','◇HERRADURA'],
        //     ['corralejo','◇CORRALEJO'],
        //     ['cazadores','◇CAZADORES'],
        //     ['porfidio','◇PORFIDIO'],
        //     ['casadeluna','◇CASA DE LUNA'],
        //     ['tresreyes','◇TRES REYES'],
        //     ['eljimador','◇el Jimador'],
        //     ['donjurio','◇DonJurio'],
        //     ['casanoble','◇Casa Noble'],
        //     ['kah','◇KAH'],
        //     ['patron','◇PATRON'],
        //     ['latilica','◇La Tilica'],
        //     ['muchaliga','◇MUCHA LIGA'],
        //     ['rancholajoya','◇RANCHO LA JOYA'],
        //     ['cascoviejo','◇Casco Viejo'],
        //     ['eldestilador','◇EL DESTILADOR'],
        //     ['tresalegrescompadres','◇Tres Alegres Compadres'],
        //     ['hijosdevilla','◇Hijos de Villa'],
        //     ['grancentenario','◇GRAN CENTENARIO'],
        //     ['chilecariente','◇Chile Cariente'],
        //     ['tresmagueyes','◇Tres Magueyes'],
        //     ['casinoazul','◇Casino AZUL'],
        //     ['elpadrino','◇EL PADRINO'],
        //     ['lacofradia','◇LA COFRADIA'],
        //     ['donacelia','◇DONA CELIA'],
        //     ['donfernando','◇Don Fernando'],
        // ];

        return view('tequila.syouhin')
            ->with('syouhin_contents', $syouhin_contents);
            // ->with('syouhin_titles', $syouhin_titles);
    }
}
