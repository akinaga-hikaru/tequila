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

        $syouhin_titles =[
            ['sauza','SAUZA','1102'],
            ['josecuervo','Jose Cuervo','1122'],
            ['olmeca','OLMECA','1111'],
            ['mariachi','MARIACHI','1111'],
            ['alacran','ALACRAN','1416'],
            ['ahatoro','AHA TORO','1548'],
            ['eltesoro','El Tesoro','1139'],
            ['agavales','Agavales','1438'],
            ['ole','Ole','1143'],
            ['orendain','Orendain','1110'],
            ['camino','Camino','1487'],
            ['elcharro','EL CHARRO','1460'],
            ['herradura','HERRADURA','1119'],
            ['corralejo','CORRALEJO','1368'],
            ['cazadores','CAZADORES','1487'],
            ['porfidio','PORFIDIO','1462'],
            ['casadeluna','CASA DE LUNA','1551'],
            ['tresreyes','TRES REYES','1460'],
            ['eljimador','el Jimador','1119'],
            ['donjurio','DonJurio','1449'],
            ['casanoble','Casa Noble','1137'],
            ['kah','KAH','1472'],
            ['patron','PATRON','1492'],
            ['latilica','La Tilica','1551'],
            ['muchaliga','MUCHA LIGA','1551'],
            ['rancholajoya','RANCHO LA JOYA','1555'],
            ['cascoviejo','Casco Viejo','1456'],
            ['eldestilador','EL DESTILADOR','1173'],
            ['tresalegrescompadres','Tres Alegres Compadres','1137'],
            ['hijosdevilla','Hijos de Villa','1433'],
            ['grancentenario','GRAN CENTENARIO','1122'],
            ['chilecariente','Chile Cariente','1548'],
            ['tresmagueyes','Tres Magueyes','1449'],
            ['casinoazul','Casino AZUL','1466'],
            ['elpadrino','EL PADRINO','1438'],
            ['lacofradia','LA COFRADIA','1137'],
            ['donacelia','DONA CELIA','1438'],
            ['donfernando','Don Fernando','1473'],
            ['rehiletepapalote','Rehilete PAPALOTE','1548'],
            ['hussons','Husson\'s','1489'],
            ['tesoroazul','TESORO AZUL','1416'],
            ['santo','Santo','-'],
        ];

        $nom = [];
        $noms = [];
        foreach ($syouhin_titles as $item) {
            if (!in_array($item[2], $nom)) {
                $nom[] = $item[2];
                $noms[] = $item;
            }
        }

        return view('tequila.syouhin')
            ->with('syouhin_contents', $syouhin_contents)
            ->with('syouhin_titles', $syouhin_titles)
            ->with('noms', $noms);
    }
}
