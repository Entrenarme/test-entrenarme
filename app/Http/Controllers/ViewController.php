<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class ViewController extends \Illuminate\Routing\Controller{

    public function show($view){

        return view('partials.'.$view);
        
    }

}
