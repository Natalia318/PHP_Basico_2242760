<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetabustacdorController extends Controller
{
    //mostrar formulario de busqueda
    public function formulario_buscador(){
        return view('metabuscador');
    }

    //realizar la busqueda
    public function buscar(){
        //datos llegan arreglo $_POST
        $termino =$_POST['termino'];
        $motor =$_POST['motores'];

        switch($motor){
            case 1:
                return redirect()->to("https://www.google.com/search?q=$termino");
            break;
            case 2:
                return redirect()->to("https://www.bing.com/search?q=$termino");
            break;
            case 3:
                return redirect()->to("https://espanol.search.yahoo.com/search?p=$termino");
            break;
            case 4:
                return redirect()->to("https://search.naver.com/search.naver?sm=tab_hty.top&where=nexearch&query=$termino&oquery");
            break;
            case 5:
                return redirect()->to("https://www.baidu.com/s?ie=utf-8&f=8&rsv_bp=1&rsv_idx=1&tn=baidu&wd=$termino&fenlei");
            break;
            case 6:
                return redirect()->to("https://www.youtube.com/results?search_query=$termino");
            break;
            case 7:
                return redirect()->to("https://www.tiktok.com/search?q=$termino");
            break;
            case 8:
                return redirect()->to("https://www.facebook.com/search/top?q=$termino");
            break;
            case 9:
                return redirect()->to("https://co.pinterest.com/search/pins/?q=$termino");
            break;
            case 10:
                return redirect()->to("https://mobile.twitter.com/search?q=$termino");
            break;

        }
    }

}
