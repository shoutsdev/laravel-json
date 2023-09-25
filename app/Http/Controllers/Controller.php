<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Collection;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function index(){
        $collection = new Collection([
            ['name' =>  'iPhone 11 Pro', 'price'    =>  999],
            ['name' =>  'iPhone 11', 'price'    =>  799],
        ]);


        $jsonValue = $collection->toJson(JSON_PRETTY_PRINT);
        dd($jsonValue);
    }
}
