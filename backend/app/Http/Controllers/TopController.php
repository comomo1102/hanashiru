<?php
namespace App\Http\Controllers;

class TopController extends Controller {

    public function index(){
        $view_data = [
            'name' => 'Momoko',
            'age' => '32'
        ];
        // view(blade, bladeで使う変数名を'kye' 値を'value'の配列)
        return view('top', $view_data);
    }

}
