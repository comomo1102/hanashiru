<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ListController extends Controller {

    public function index(Request $request){
        $input = $request->all();
        return view('list', ['name' => 'Momoko']);
    }

}
