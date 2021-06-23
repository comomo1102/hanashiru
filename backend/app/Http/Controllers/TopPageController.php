<?php
namespace App\Http\Controllers;

class TopPageController extends Controller {

    public function show(){
        return view('top', ['name' => 'Momoko']);
    }

}
