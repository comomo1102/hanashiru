<?php
namespace App\Http\Controllers;


use App\Models\Flower;
use Illuminate\Http\Request;

class ListController extends Controller {

    public function index(Request $request){
        $input = $request->all();

        $flower = new Flower;
        $value = $flower->find(1)->toArray();
        dd($value);
        return view('list', ['name' => 'Momoko']);
    }

}
